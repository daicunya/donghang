<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/4/21 0021
 * Time: 10:40
 */
namespace app\modules\cn\controllers;

use yii;
use yii\web\Controller;

class AboutController extends Controller
{
    public $enableCsrfValidation = false;
    public $layout = 'cn.php';
    public function actionAbout()
    {
        return $this->render('about');
    }
}