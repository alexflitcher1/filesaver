<?php
namespace frontend\controllers;

use yii\web\Controller;
use yii\web\Cookie;
use Yii;

class MainController extends Controller
{
    public function actionIndex()
    {
        return $this->render('index');
    }
}
