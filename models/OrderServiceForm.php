<?php

namespace app\models;

use Yii;
use yii\base\Model;


class OrderServiceForm extends Model
{
    public ?string $name = null;
    public ?string $phone = null;
    public ?string $service_name = null;


    public function rules(): array
    {
        return [
            [['name', 'phone',], 'required'],
            ['service_name', 'string']
        ];
    }

    public function attributeLabels(): array
    {
        return [
            'name' => Yii::t('app', 'Name'),
            'phone' => Yii::t('app', 'Phone'),
        ];
    }

    public function contact(string $email): bool
    {
        if ($this->validate()) {
            $compose = Yii::$app->mailer->compose();
            $content = '
            ' . $this->name . '
            ' . $this->phone;
            $compose->setTo($email)
                ->setFrom([Yii::$app->params['senderEmail'] => Yii::$app->params['senderName']])
                ->setSubject('Заявка - ' . $this->service_name)
                ->setTextBody($content)
                ->send();

            return true;
        }
        return false;
    }
}
