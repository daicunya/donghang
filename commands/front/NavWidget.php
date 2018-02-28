<?php
/**
 * 主导航菜单组件
 */
    namespace app\commands\front;
    use yii\base\Widget;
    use yii;
    use yii\web\application;
    use yii\web\controller;
	class NavWidget extends Widget  {
        public $data;

        /**
         * 定义函数
         * */
        public function init()
        {//这个可以取侧边栏数
            $this->nav();
        }

        /**
         * 运行覆盖程序
         * */
        /**
         * 运行覆盖程序
         * */
        public function run()
        {
            return $this->render('nav', ['data' => $this->data]);
        }

        public function nav(){
            $data['heibai'] = Yii::$app->db->createCommand("select * from {{%info}} where cate='黑白印刷' order by id asc")->queryAll();
            $data['zhizhi'] = Yii::$app->db->createCommand("select * from {{%info}} where cate='纸质印刷'  order by id asc")->queryAll();
            $data['shuliao'] = Yii::$app->db->createCommand("select * from {{%info}} where cate='塑料材质印刷'  order by id asc")->queryAll();
            $data['jiaoyin'] = Yii::$app->db->createCommand("select * from {{%info}} where cate='胶印'  order by id asc")->queryAll();
            $data['sheji'] = Yii::$app->db->createCommand("select * from {{%info}} where cate='设计制作'  order by id asc")->queryAll();
            $data['tuwen'] = Yii::$app->db->createCommand("select * from {{%info}} where cate='图文输出' order by id asc")->queryAll();
            $this->data=$data;
        }

	}
?>

