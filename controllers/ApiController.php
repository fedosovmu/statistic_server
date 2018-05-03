<?php
/**
 * Created by PhpStorm.
 * User: mocor
 * Date: 03.05.2018
 * Time: 0:52
 */

namespace app\controllers;


use yii\web\Controller;

class ApiController extends Controller
{
    public function actionIndex()
    {
        return "<p>Hello, this is API</p>";
    }
}