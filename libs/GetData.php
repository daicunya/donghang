<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/5/15 0015
 * Time: 9:57
 */
namespace app\libs;
use yii;
class GetData {
    /*
     * 接收表单数据，并判断完整性
     * @$must,为必填项目
     * $postion,上传图片保存位置
     */
    public function PostData($must,$postion=''){
        // 获取post提交的数据
        foreach($_POST as $k=>$val){
            $data["$k"]=Yii::$app->request->post("$k",'');
        }
        // 判断是修改还是添加时图片的处理
        if(empty($data['id'])){ // 添加时
            if(isset($_FILES['pic']['name'])){ // 有上传的输入框时，不定有上传
                if(empty($_FILES['pic']['name'])){  // 上传框为空时
                    $data['pic']='';
                }else{    // 上传框非空时
                    $path=$this->upImage($postion);
                    $data['pic']  = $path;
                }
            }
        }else{
            if(isset($_FILES['pic']['name'])){ // 有上传的输入框时，不定有上传
                if(empty($_FILES['pic']['name'])){  // 上传框为空时
                    if($data['pic']==false){
                        $data['pic']='';
                    }else{
                        $data['pic']=$data['pic'];
                    }
                }else{    // 上传框非空时
                    $path=$this->upImage($postion);
                    $data['pic']  = $path;
                }
            }
        }
        if(isset($data['validTime'])&&(!is_numeric($data['validTime']))){
            $data['validTime']=strtotime($data['validTime']);
        }
        if(isset($data['editorValue'])){
            $data['content']=$data['editorValue'];
            unset($data['editorValue']);
        }
        if(isset($data['_csrf'])){unset($data['_csrf']);};
        // subScores 同一道题有两种类型时
        if(isset($data['subScores2']) && $data['subScores2']){
            $data['subScores']=$data['subScores'].','.$data['subScores2'];
            unset($data['subScores2']);
        }else{
            unset($data['subScores2']);
        }
        // 判断完整性
        foreach($must as $k=>$v){
            if(empty($data["$k"])){
                die("<script>alert(\"请填写".$v."\");history.go(-1);</script>");
            }
        }
        return $data;
    }
    // 图片上传处理，@position为上传文件的位置
    public function upImage($position){
        $config=array('arr_allow_exts'=>  array('gif','jpg','jpeg','bmp','png'),);  // 允许上传的图片格式
        $up=new \UploadFile($config);
        $savePath="./Upload/images/".$position."/";
        $file=$_FILES['pic'];
        $data= $up->uploadOne($file,$savePath);
        // 包含错误信息
        if($data['arr_data']['int_error']){
            die('<script>alert("上传文件失败");history.go(-1);</script>');
        }else{
            $a=$data['arr_data']['arr_data'][0];
            $path=ltrim($a['savepath'].$a['savename'],'.');
            return $path;
        }
    }
    // 自动完成字段，即不需要表单提交的数据的添加字段
    // time表示当前时间，hits表示点击量
    public function Auto($time='',$hits=''){
        if($time!=false){
            $data["$time"]=time();
        }
        if($hits!=false){
            $data["$hits"]=rand(100,500);
        }
        return $data;
    }
}