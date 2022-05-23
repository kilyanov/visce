<?php

namespace app\controllers;

use Yii;
use app\models\OrderForm;
use yii\helpers\Json;
use yii\web\Controller;
use yii\web\Response;

class SiteController extends Controller
{

    public function actions(): array
    {
        return [
            'error' => [
                'class' => 'yii\web\ErrorAction',
            ],
        ];
    }

    public function actionIndex(): string
    {
        return $this->render('index');
    }

    public function actionServices(): string
    {
        return $this->render('services');
    }

    public function actionOrder(): string
    {
        $model = new OrderForm();
        if ($model->load(Yii::$app->request->post()) && $model->validate()) {
            $model->contact(Yii::$app->params['adminEmail']);
        }
        return Json::encode(['data' => true]);
    }

}
