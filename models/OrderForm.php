<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\web\UploadedFile;


class OrderForm extends Model
{
    public ?string $name = null;
    public ?string $phone = null;
    public ?string $email = null;
    public ?string $body = null;
    public $attachment = null;


    public function rules()
    {
        return [
            [['name', 'email', 'phone', 'body'], 'required'],
            ['email', 'email'],
            [['attachment'], 'file', 'skipOnEmpty' => true, 'extensions' => 'png, jpg, doc, docx, xls, xlsx', 'maxFiles' => 4],
        ];
    }

    public function attributeLabels()
    {
        return [
            'name' => Yii::t('app', 'Name'),
            'email' => 'Email',
            'phone' => Yii::t('app', 'Phone'),
            'body' => Yii::t('app', 'Content'),
        ];
    }

    public function contact(string $email): bool
    {
        if ($this->validate()) {
            $compose = Yii::$app->mailer->compose();
            $files = UploadedFile::getInstances($this, 'attachment');
            if (count($files) > 0) {
                foreach ($files as $file) {
                    $content_file = file_get_contents($file->tempName);
                    $compose->attachContent($content_file, [
                        'fileName' => $file->baseName . '.' . $file->extension,
                        'contentType' => $file->type]);
                }
            }
            $content = '
            ' . $this->name . '
            ' . $this->phone . '
            ' . $this->email . '
            ' . $this->body;
            $compose->setTo($email)
                ->setFrom([Yii::$app->params['senderEmail'] => Yii::$app->params['senderName']])
                ->setReplyTo([$this->email => $this->name])
                ->setSubject('Заявка')
                ->setTextBody($content)
                ->send();

            return true;
        }
        return false;
    }
}
