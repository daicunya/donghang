<?php
/**
 * 主导航菜单组件
 */
    namespace app\commands\front;
    use yii\base\Widget;
    use yii;
    use yii\web\application;
    use yii\web\controller;
	class FooterWidget extends Widget  {
        public $data;

        /**
         * 定义函数
         * */
        public function init()
        {//这个可以取侧边栏数
        }

        /**
         * 运行覆盖程序
         * */
        /**
         * 运行覆盖程序
         * */
        public function run()
        {
            return $this->render('footer');
        }

	}
?>

