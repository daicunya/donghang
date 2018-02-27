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
use app\libs\Pager;
use app\modules\cn\models\Teachers;

class IndexController extends Controller
{
    public $layout='cn.php';
    public function actionIndex()
    {
        $data['heibai'] = Yii::$app->db->createCommand("select * from {{%info}} where cate='黑白印刷'")->queryAll();
        $data['zhizhi'] = Yii::$app->db->createCommand("select * from {{%info}} where cate='纸质印刷'")->queryAll();
        $data['shuliao'] = Yii::$app->db->createCommand("select * from {{%info}} where cate='塑料'")->queryAll();
        $data['jiaoyin'] = Yii::$app->db->createCommand("select * from {{%info}} where cate='黑白印刷'")->queryAll();
        $data['sheji'] = Yii::$app->db->createCommand("select * from {{%info}} where cate='黑白印刷'")->queryAll();

        return $this->render('index',$data);
    }
    public function actionDetails()
    {
        return $this->render('details');
    }

}