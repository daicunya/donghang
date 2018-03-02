<style xmlns="http://www.w3.org/1999/html">
    .info-wrap>td {
        text-align: center;
    }
    .info-wrap>td>div {
        max-height: 200px;
        overflow-y: auto;
    }
    .tiao-val {
        width: 30px;
        height: 30px;
        margin: 5px 5px 0 0;
        outline: none;
        font-size: 14px;
    }
    .tiao-btn {
        font-size: 14px;
    }
    .add-product {
      line-height: 40px;
    }
    .pagination{
      /*position: relative;*/
    }
    .pagination:after {
      /*position: absolute;*/
      display: block;
      content: '';
      visibility: hidden;
      clear: both;
    }
  .pagination>li {
    display: inline;
  }
  .pagination>li>a,
  .pagination>li>span {
    position: relative;
    float: left;
    padding: 6px 12px;
    margin-left: -1px;
    /*line-height: 1.42857143;*/
    color: #337ab7;
    text-decoration: none;
    background-color: #fff;
    border: 1px solid #ddd;
    font: 400 14px/1.42857143 simsun;
  }
  .pagination>li>a>span {
    font: 400 14px/1.42857143 simsun;
  }
  .pagination>li:first-child>a,
  .pagination>li:first-child>span {
    margin-left: 0;
    border-top-left-radius: 4px;
    border-bottom-left-radius: 4px;
  }
  .pagination>li:last-child>a,
  .pagination>li:last-child>span {
    border-top-right-radius: 4px;
    border-bottom-right-radius: 4px;
  }
    .pagination > li > a:hover,
    .pagination > li > span:hover,
    .pagination > li > a:focus,
    .pagination > li > span:focus {
      z-index: 2;
      color: #23527c;
      background-color: #eee;
      border-color: #ddd;
    }
    .pagination > .active > a,
    .pagination > .active > span,
    .pagination > .active > a:hover,
    .pagination > .active > span:hover,
    .pagination > .active > a:focus,
    .pagination > .active > span:focus {
      z-index: 3;
      color: #fff;
      cursor: default;
      background-color: #337ab7;
      border-color: #337ab7;
    }
</style>
<div class="span10">
    <div >
        <a href="/index/index">首页</a><span >&gt;</span><span>产品管理</span>
    </div>
    <a class="add-product" href="<?php echo baseUrl.'/admin/info/add'?>">添加产品</a>
    <table border="1"  style="table-layout: fixed;width:100%;">
        <tr align="center">
            <th width="60px">id</th>
            <th>标题</th>
            <th>简介</th>
            <th>图片</th>
            <th width="80px">产品类别</th>
            <th width="120px">内容</th>
            <th width="120px">发布时间</th>
            <th width="60px">点击量</th>
            <th width="100px">操作</th>
        </tr>
        <?php foreach($data as $v){?>
            <tr class="info-wrap">
                <td>
                    <div>
                        <?php echo $v['id']?>
                    </div>
                </td>
                <td>
                    <div>
                        <?php echo $v['title']?>
                    </div>
                </td>
                <td>
                    <div>
                        <?php echo $v['introduction']?>
                    </div>
                </td>
                <td title="<?php echo $v['pic']?>">
                    <div>
                        <?php echo $v['pic']?>
                    </div>
                </td>
                <td>
                    <div>
                        <?php echo $v['cate']?>
                    </div>
                </td>
                <td>
                    <div>
                        <?php echo $v['content']?>
                    </div>
                </td>
                <td>
                    <div>
                        <?php echo $v['createTime']?>
                    </div>
                </td>
                <td>
                    <div>
                        <?php echo $v['hits']?>
                    </div>
                </td>
                <td>
                    <div>
                        <a class="link-update" href="<?php echo baseUrl.'/admin/info/add'.'?'.'id='.$v['id']?>">修改</a>
                        <a class="link-del" href="" onclick="del(<?php echo $v['id'] ?>)">删除</a>
                    </div>
                </td>
            </tr>
        <?php }?>
    </table>
    <div class="tiao-wrap">
        <?php echo $str?>
        <input type="text" class="tiao-val"><button class="tiao-btn">跳转</button>
    </div>
</div>

<script>
    $(function () {
        $('.tiao-btn').click(function () {
            location.href = location.pathname+"?p="+$('.tiao-val').val();
        })
    });
    function del(id){
        if(confirm("确定删除内容吗")) {
            $.get("/admin/info/del", {id: id},
                function (msg) {
                    if (msg) {
                        alert('删除成功');
                    }
                }, 'text'
            );
        }
    }
</script>
