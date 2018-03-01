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
        $arr['heibai'] = Yii::$app->db->createCommand("select * from {{%info}} where cate='黑白印刷' order by id asc limit 5")->queryAll();
        $arr['zhizhi'] = Yii::$app->db->createCommand("select * from {{%info}} where cate='纸质印刷'  order by id asc limit 6")->queryAll();
        $arr['shuliao'] = Yii::$app->db->createCommand("select * from {{%info}} where cate='塑料材质印刷'  order by id asc limit 5")->queryAll();
        $arr['jiaoyin'] = Yii::$app->db->createCommand("select * from {{%info}} where cate='胶印'  order by id asc limit 6")->queryAll();
        $arr['sheji'] = Yii::$app->db->createCommand("select * from {{%info}} where cate='设计制作'  order by id asc limit 5")->queryAll();
        $arr['tuwen'] = Yii::$app->db->createCommand("select * from {{%info}} where cate='图文输出' order by id asc limit 6")->queryAll();
        $banner= Yii::$app->db->createCommand("select * from {{%banner}} order by id desc limit 10 ")->queryAll();
        $hot=Yii::$app->db->createCommand("select * from {{%info}}  order by hits desc,id desc limit 6")->queryAll();

        return $this->render('index',['arr'=>$arr,'banner'=>$banner,'hot'=>$hot]);
    }
    public function actionDetails()
    {
        $data['heibai'] = Yii::$app->db->createCommand("select * from {{%info}} where cate='黑白印刷'")->queryAll();
        $data['zhizhi'] = Yii::$app->db->createCommand("select * from {{%info}} where cate='纸质印刷'")->queryAll();
        $data['shuliao'] = Yii::$app->db->createCommand("select * from {{%info}} where cate='塑料材质印刷'")->queryAll();
        $data['jiaoyin'] = Yii::$app->db->createCommand("select * from {{%info}} where cate='胶印'")->queryAll();
        $data['sheji'] = Yii::$app->db->createCommand("select * from {{%info}} where cate='设计制作'")->queryAll();
        $data['tuwen'] = Yii::$app->db->createCommand("select * from {{%info}} where cate='图文输出'")->queryAll();

        $id=Yii::$app->request->get('id', '');
        $details = Yii::$app->db->createCommand("select * from {{%info}} where id=$id")->queryOne();
        $related = Yii::$app->db->createCommand("select * from {{%info}} where cate='".$details['cate']."' limit 6")->queryAll();
        return $this->render('details',['data'=>$data,'details'=>$details,'related'=>$related]);
    }

}