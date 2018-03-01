
<script type="text/javascript" charset="utf-8" src="/ueditor/ueditor.config.js"></script>
<script type="text/javascript" charset="utf-8" src="/ueditor/ueditor.all.js"> </script>
<script type="text/javascript" charset="utf-8" src="/ueditor/lang/zh-cn/zh-cn.js"></script>

<div class="span10">
    <a href="/index/index">首页</a><span >&gt;</span><span>产品管理</span><span >&gt;</span><span>添加/修改</span>
    <form name="form" method="post" action="<?php echo baseUrl."/admin/info/add"?>" enctype="multipart/form-data">
        <table>
            <tr>
                <td width="80px">标题:</td>
                <td><input type="text" name="title" placeholder="标题" style="width: 500px;" value="<?php echo isset($data)? $data['title']:''?>"></td>
            </tr>
            <tr>
                <td>简介:</td>
                <td>
                    <input type="text" name="introduction" placeholder=""  style="width: 500px;" value="<?php echo isset($data)? $data['introduction']:''?>" />
                </td>
            </tr>
            <tr>
                <td>类别:</td>
                <td>
                    <select name="cate" id="cate" >
                        <option value ="">请选择类型</option>
                        <option value ="黑白印刷" <?php echo isset($data)&& $data['cate']=="黑白印刷" ?  'selected=selected':''?>>黑白印刷</option>
                        <option value ="纸质印刷" <?php echo isset($data)&& $data['cate']== "纸质印刷" ?  'selected=selected':''?>>纸质印刷</option>
                        <option value ="塑料材质印刷" <?php echo isset($data)&& $data['cate']== "塑料材质印刷" ?  'selected=selected':''?>>塑料材质印刷</option>
                        <option value ="胶印" <?php echo isset($data)&& $data['cate']== "胶印" ?  'selected=selected':''?>>胶印</option>
                        <option value ="设计制作" <?php echo isset($data)&& $data['cate']== "设计制作" ?  'selected=selected':''?>>设计制作</option>
                        <option value ="图文输出" <?php echo isset($data)&& $data['cate']== "图文输出" ?  'selected=selected':''?>>图文输出</option>
                   </select>
                </td>
            </tr>
            <?php if(isset($data)) {
                $str = '<tr>';
                $str .= '<td>原图片:</td>';
                $str .= '<td>';
                $pic = $data['pic'];
                $str .= "<input name='pic' type='text' value='" . $pic . "'></td></tr>";
                echo $str;
            } ?>
            <tr>
                <td>内容图片:</td>
                <td>
                    <input id="file" type="file" name="pic" >
                </td>
            </tr>
            <tr>
                <td>内容：</td>
                <td id="content">
                    <textarea id="editor" type="text/plain" name="" style="width:600px;height:300px;">
                        <?php echo isset($data)? $data['content']:''?>
                    </textarea>
                </td>
            </tr>

            <tr>
                <td>初始化点击量:</td>
                <td>
                    <input type="text" name="hits" placeholder=""  style="width: 500px;" value="<?php echo isset($data)? $data['hits']:''?>" />
                </td>
            </tr>

            <tr>
                <td colspan="2" align="right">
                    <input type="hidden" name='id' value="<?php echo isset($data)? $data['id']:''?>"/>
                    <button type="submit" id="login-button">添加/修改</button>
                </td>
            </tr>
            <input type="hidden" name="_csrf" value="<?=Yii::$app->request->getCsrfToken()?>" />
        </table>
    </form>

</div>
<script>
    //实例化编辑器
    var ue = UE.getEditor('editor');
    function chageCate(){
        var cate = document.getElementById("cate").value;
        if(cate=="公开课"){
            $('#activeTime').show();
            $('#videoAddress').show();
            $('#name').show();
        }else{
            $('#activeTime').hide();
            $('#videoAddress').hide();
            $('#name').hide();
        }
    }
    chageCate();
    $("#cate").change(function(){
        chageCate();
    })
</script>