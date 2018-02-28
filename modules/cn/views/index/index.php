<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width,height=device-height,initial-scale=1.0,minimum-scale=1.0,maximum-scale=1.0,user-scable=no">
  <meta name="renderer" content="webkit">
  <link href="https://cdn.bootcss.com/bootstrap/3.3.2/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/3.4.2/css/swiper.min.css">
  <link rel="stylesheet" href="/cn/css/font-awesome.min.css">
  <link rel="stylesheet" href="/cn/css/common.css">
  <link rel="stylesheet" href="/cn/css/index.css">
  <title>首页</title>
</head>
<body>
<?php use app\commands\front\NavWidget;?>
<?php NavWidget::begin();?>
<?php NavWidget::end();?>
<div class="container">
  <div class="p-wrap bnr-wrap swiper-container">
    <div class="swiper-wrapper">
      <?php foreach($banner as $v){?>
      <div class="swiper-slide">
        <a href="<?php echo $v['url']?>">
          <img src="<?php echo $v['pic']?>" alt="">
        </a>
      </div>
      <?php }?>
    </div>
    <!-- Add Pagination -->
    <div class="swiper-pagination"></div>
    <!-- Add Arrows -->
    <div class="bnr-arrow swiper-button-next"></div>
    <div class="bnr-arrow swiper-button-prev"></div>
  </div>
  <div class="p-wrap hot-wrap">
    <h2 class="p-title">热门产品</h2>
    <ul class="row">
      <?php foreach($hot as $v){?>
      <li class="col-md-2 col-sm-4 col-xs-4">
        <a href="/details/<?php echo $v['id']?>.html">
          <div>
            <img src="<?php echo $v['pic']?>" alt="">
          </div>
        </a>
      </li>
      <?php }?>
    </ul>
  </div>
  <div class="p-wrap black-wrap">
    <h2 class="p-title">黑白印刷</h2>
    <ul class="row">
      <?php foreach($arr['heibai'] as $k=>$v){?>
      <li class="col-md-<?php if($k<2){echo 6;}else{echo 4;}?> col-sm-<?php if($k<2){echo 6;}else{echo 4;}?> col-xs-<?php if($k<2){echo 6;}else{echo 4;}?>">
        <a href="/details/<?php echo $v['id']?>.html">
          <div>
            <img src="<?php echo $v['pic']?>" alt="">
          </div>
        </a>
      </li>
      <?php }?>
    </ul>
  </div>
  <div class="p-wrap paper-wrap">
    <h2 class="p-title">纸质印刷</h2>
    <ul class="row">
      <?php foreach($arr['zhizhi'] as $k=>$v){?>
        <li class="col-md-4 col-sm-4 col-xs-4>">
          <a href="/details/<?php echo $v['id']?>.html">
            <div>
              <img src="<?php echo $v['pic']?>" alt="">
            </div>
          </a>
        </li>
      <?php }?>
    </ul>
  </div>
  <div class="p-wrap plastic-wrap">
    <h2 class="p-title">塑料材质印刷</h2>
    <ul class="row">
      <?php foreach($arr['shuliao'] as $k=>$v){?>
        <li class="col-md-<?php if($k<2){echo 6;}else{echo 4;}?> col-sm-<?php if($k<2){echo 6;}else{echo 4;}?> col-xs-<?php if($k<2){echo 6;}else{echo 4;}?>">
          <a href="/details/<?php echo $v['id']?>.html">
            <div>
              <img src="<?php echo $v['pic']?>" alt="">
            </div>
          </a>
        </li>
      <?php }?>
    </ul>
  </div>
  <div class="p-wrap offset-wrap">
    <h2 class="p-title">胶印</h2>
    <ul class="row">
      <?php foreach($arr['jiaoyin'] as $k=>$v){?>
        <li class="col-md-4 col-sm-4 col-xs-4>">
          <a href="/details/<?php echo $v['id']?>.html">
            <div>
              <img src="<?php echo $v['pic']?>" alt="">
            </div>
          </a>
        </li>
      <?php }?>
    </ul>
  </div>
  <div class="p-wrap custom-wrap">
    <h2 class="p-title">设计定制</h2>
    <ul class="row">
      <?php foreach($arr['sheji'] as $k=>$v){?>
        <li class="col-md-<?php if($k<2){echo 6;}else{echo 4;}?> col-sm-<?php if($k<2){echo 6;}else{echo 4;}?> col-xs-<?php if($k<2){echo 6;}else{echo 4;}?>">
          <a href="/details/<?php echo $v['id']?>.html">
            <div>
              <img src="<?php echo $v['pic']?>" alt="">
            </div>
          </a>
        </li>
      <?php }?>
    </ul>
  </div>
  <div class="p-wrap text-wrap">
    <h2 class="p-title">图文输出</h2>
    <ul class="row">
      <?php foreach($arr['tuwen'] as $k=>$v){?>
        <li class="col-md-3 col-sm-3 col-xs-3>">
          <a href="/details/<?php echo $v['id']?>.html">
            <div>
              <img src="<?php echo $v['pic']?>" alt="">
            </div>
          </a>
        </li>
      <?php }?>
    </ul>
  </div>
</div>
<?php use app\commands\front\FooterWidget;?>
<?php FooterWidget::begin();?>
<?php FooterWidget::end();?>
<script src="https://cdn.bootcss.com/jquery/2.2.3/jquery.min.js"></script>
<script src="https://cdn.bootcss.com/bootstrap/3.3.2/js/bootstrap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/3.4.2/js/swiper.jquery.min.js"></script>
</body>
<script>
  $(function () {
    var swiper = new Swiper('.swiper-container', {
      loop: true,
      pagination: '.swiper-pagination',
      paginationClickable: '.swiper-pagination',
      nextButton: '.swiper-button-next',
      prevButton: '.swiper-button-prev',
      spaceBetween: 30
    });
  });
</script>
</html>