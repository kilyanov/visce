<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, viewport-fit=cover">
    <meta name="theme-color" content="#FBFBFB">
	<meta name="mailru-domain" content="TnyZb31uudy0yPN2" />
	
	<title>Visce - Международная IT компания</title>
	<link rel="apple-touch-icon" sizes="180x180" href="./assets/media/favicon/apple-touch-icon.png">
	<link rel="icon" type="image/png" sizes="32x32" href="./assets/media/favicon/favicon-32x32.png">
	<link rel="icon" type="image/png" sizes="16x16" href="./assets/media/favicon/favicon-16x16.png">
	<link rel="manifest" href="./assets/media/favicon/site.webmanifest">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/semantic-ui@2.4.2/dist/semantic.min.css">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
	<link rel="stylesheet" href="./assets/css/styles.css">
	<link rel="stylesheet" href="./assets/css/header.css">
    <link rel="stylesheet" href="./assets/css/sidebar.css">
    <link rel="stylesheet" href="./assets/css/glob.css">
    <link rel="stylesheet" href="./assets/css/footer.css">
    <link rel="stylesheet" href="./assets/css/services.css">
	<link rel="stylesheet" href="./assets/css/steps.css">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@splidejs/splide@3.6.12/dist/css/splide.min.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.3.0/animate.css"/>
</head>
<body>

	<!-- MODAL -->
	<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
          <div class="modal-content p-3">
            <div class="text-end">
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="text-center p-2">
                <img class="justify-self-center" src="./assets/media/Visce.svg" alt=""  width="150">
            </div>
            <div class="ui form modal-body text-center">
             <form action="" id="orderService" method="post" enctype="multipart/form-data">
				 <input type="hidden" value="1" name="modal_form">
				 <input id="hide1" type="hidden" value="" name="service_name">
                 <input type="text" placeholder="Ваше имя" name="name" required/>
                 <input type="text" class="mt-3" name="phone" placeholder="Ваш телефон" required/>
                 <button class="ui secondary basic brown big button mt-3" type="submit">Отправить</button>
                 <div class="fs-5 mt-3 text-start">
                    Оставьте свои контактные данные, и мы свяжемся с Вами в ближайшее время для того, чтобы обсудить сотрудничество
                 </div>
             </form>
            </div>
          </div>
        </div>
      </div>
	  <!-- MODAL -->


	<!-- SIDEBAR START -->
	<div class="ui sidebar vertical menu borderless fs-2">
		<div class="p-3 text-end" id="closeSidebar">
			<img src="./assets/media/cross.svg" alt="">
		</div>
		<a class="item" href="/#aboutUs">
			О нас
		</a>


		
			<div class="d-flex align-items-center">
				<a class="item" href="/services">
					Услуги
				</a>
				<label for="state" class="rotate">
					<i class="caret right icon "></i>
				</label>
			</div>
	
			<input type="checkbox" id="state" hidden>
			<div class="content">
				<a class="item" href="/services#automation">Автоматизация бизнес процессов</a>
				<a class="item" href="/services#crm">CRM/ERP/HRM</a>
				<a class="item" href="/services#databases">Базы данных</a>
				<a class="item" href="/services#webDevelop">Разработка сайта</a>
				<a class="item" href="/services#cloud">Облачнные решения</a>
				<a class="item" href="/services#mobile">Мобильные приложений</a>
				<a class="item" href="/services#smartWatch">Умные часы</a>
				<a class="item" href="/services#gatewaysAPI">Шлюзы API</a>
				<a class="item" href="/services#artificialIntel">Искусственный интеллект</a>
				<a class="item" href="/services#saas">SAAS проекты</a>
				<a class="item" href="/services#support">Техническая поддержка</a>
				<a class="item" href="/services#smartCollection">Smart collection</a>
			</div>

		<a class="item" href="/#running_line">
			Клиенты
		</a>
		<a class="item" href="/#benefits">
			Преимущества
		</a>
		<a class="item" href="/#ethics">
			Проффесиональная этика
		</a>
		<a class="item" href="/steps">
			Этапы разработки
		</a>
		<a class="item" href="/#feedback">
			Оставить заявку
		</a>
		<a class="item" href="/#contacts">
			Контакты
		</a>
		<div href="#" class="text-center mt-5 sideBarLogo">
            <a href="/">
                <img src="./assets/media/Visce.svg" >
            </a>
          </div>
	</div>
	<!-- SIDEBAR END -->

	<!-- HEADER START -->
	<div class="pusher">
		<nav class="header_top p-1 p-md-2 text-center align-self-center">      

			<a href="" id="up" class="logo">
				<img src="./assets/media/Visce.svg" width="130">
			</a>

			<div class="openSideBarWrapper">
				<img class="sidebar icon" id="openSideBar" src="./assets/media/menu.svg"/>
			</div>


			<div class="contact p-2 d-flex align-items-center ">
				<div class="mobilePhoneContact d-block d-md-none">
					<a href="tel:+78002227766">
						<i class="large phone icon"></i>
					</a>
				</div>
				
				<a href="tel:+7(926)-881-87-10">
				<div class="wrap fs-4 d-none d-md-block">
					<div class="visib">Contact us</div>
					<div class="invis">+7(926)-881-87-10</div>
				</div>
				</a>

				<img class="p-3 p-xl-4 pt-0 pb-0 pt-xl-0 pb-xl-0" src="./assets/media/sep.svg" alt="">

				<div class="wrap align-middle">
					<img class="visib" src="./assets/media/earth.svg" alt="">
					<img class=" invis" src="./assets/media/darkEarth.svg" alt="">
				</div>           
			</div>
		</nav>
	
	<!-- HEADER END  -->