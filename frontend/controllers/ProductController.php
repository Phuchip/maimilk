<?php

namespace frontend\controllers;
use Yii;

class ProductController extends \yii\web\Controller
{
    public function actionIndex()
    {
        return $this->render('index');
    }

}
