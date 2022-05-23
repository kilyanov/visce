<?php 

ini_set('error_reporting', E_ALL);
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);

function p($v) {
	echo '<pre>';
	print_r($v);
	echo '</pre>';
}

$api_key = '5279440927:AAFbkwzf0KjiJAkNLW82PSmbMwzXLjUIEv4';

$channel_id = '-1001665300008';


$json = [];

if(isset($_POST) && !empty($_POST)) {

	$is_modal = false;

	if(isset($_POST['modal_form'])) {
		$is_modal = true;
	}

	if(!isset($_POST['name']) || empty($_POST['name'])) {
		$json['error'] = 'Нужно указать имя';
	}

	if(!isset($json['error'])) {
		if(!isset($_POST['phone']) || empty($_POST['phone'])) {
			$json['error'] = 'Нужно указать телефон';
		}
	}

	if($is_modal == false) {
		if(!isset($json['error'])) {
			if(!isset($_POST['email']) || empty($_POST['email'])) {
				$json['error'] = 'Нужно указать электронный адрес';
			}
		}

		if(!isset($json['error'])) {
			if(!isset($_POST['text']) || empty($_POST['text'])) {
				$json['error'] = 'Нужно написать о Вашем проекте пару слов...';
			}
		}
	}

	if(!isset($json['error'])) {

		$files = [];

		if($is_modal == false) {
			if(isset($_FILES['attachment'])) {
				if(isset($_FILES['attachment']['type']) && !empty($_FILES['attachment']['type'])) {
					
					foreach($_FILES['attachment']['type'] as $key => $type) {
						if($type == 'application/pdf' || 
							$type == 'application/msword' || 
							$type == 'application/vnd.ms-excel' || 
							$type == 'application/vnd.ms-powerpoint' || 
							$type == 'text/plain' || 
							substr($type, 0, 6) == 'image/') {

								$files[] = [
									'tmpfile' => $_FILES['attachment']['tmp_name'][$key],
									'filename' => basename($_FILES['attachment']['name'][$key]),
									'type' => $type,
								];
						}
					}
				}
			}
		}

		if($is_modal == false) {
			$text = "НОВАЯ ЗАЯВКА С САЙТА!\n\nИмя: " . $_POST['name'] . "\nТелефон: " . $_POST['phone'] . "\nE-mail: " . $_POST['email'] . "\n\nО проекте:\n" . $_POST['text'];
		} else {
			$text = "НОВАЯ ЗАЯВКА С САЙТА!\n\nИмя: " . $_POST['name'] . "\nТелефон: " . $_POST['phone'];

			if(isset($_POST['service_name']) && !empty($_POST['service_name'])) {
				$text .= "\n\nУслуга: " . $_POST['service_name'];
			}
		}

		file_get_contents('https://api.telegram.org/bot' . $api_key . '/sendMessage?chat_id=' . (int)$channel_id . '&text=' . urlencode($text));

		if(!empty($files)) {
			foreach ($files as $file) {
				$response = array(
					'chat_id' => (int)$channel_id,
					'document' => curl_file_create($file['tmpfile'], $file['type'], $file['filename'])
				);	
						
				$ch = curl_init('https://api.telegram.org/bot' . $api_key . '/sendDocument');  
				curl_setopt($ch, CURLOPT_POST, 1);  
				curl_setopt($ch, CURLOPT_POSTFIELDS, $response);
				curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
				curl_setopt($ch, CURLOPT_HEADER, false);
				curl_exec($ch);
				curl_close($ch);
			}
		}
	}
}


header('Content-Type: application/json');
echo json_encode($json);