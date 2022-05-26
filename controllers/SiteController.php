<?php

namespace app\controllers;

use app\models\OrderServiceForm;
use Yii;
use app\models\OrderForm;
use yii\helpers\Json;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
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

    public function beforeAction($action): bool
    {

        return parent::beforeAction($action);
    }

    public function actionIndex(): string
    {
        if (Yii::$app->language !== 'en-EN') {
            Yii::$app->language = (strtolower(substr($_SERVER['HTTP_ACCEPT_LANGUAGE'],0,2)) == 'ru')
                ? 'ru-RU' : 'en-US';
        }
        return $this->render('index');
    }

    public function actionServices(): string
    {
        return $this->render('services');
    }

    public function actionCookie(): string
    {
        return $this->render('cookie');
    }

    public function actionPrivacy(): string
    {
        return $this->render('privacy');
    }

    public function actionSteps(): string
    {
        return $this->render('steps');
    }

    public function actionOrder(): string
    {
        $model = new OrderForm();
        if ($model->load(Yii::$app->request->post()) && $model->validate()) {
            $model->contact(Yii::$app->params['adminEmail']);
            return Json::encode(['data' => true]);
        }
        else {
            throw new NotFoundHttpException(implode(',', $model->getFirstErrors()));
        }
    }

    /**
     * @throws NotFoundHttpException
     */
    public function actionOrderService(): string
    {
        $model = new OrderServiceForm();
        if ($model->load(Yii::$app->request->post()) && $model->validate()) {
            $model->contact(Yii::$app->params['adminEmail']);
            return Json::encode(['data' => true]);
        }
        else {
            throw new NotFoundHttpException(implode(',', $model->getFirstErrors()));
        }
    }

}
