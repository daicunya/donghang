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
  <title>东航印刷网--承接大量纸质印刷品（如纸袋、纸杯、纸碗、奶包、快递袋、纸箱等印刷）</title>
  <meta name="keywords" content="东航包装印刷网，承接大量纸质印刷品（如纸袋、纸杯、纸碗、奶包、快递袋、纸箱等印刷）、塑料薄膜、快递袋、无纺布、商标广告、地图画册、宣传画册、书刊封面、日历、年历
奖牌、工作牌、证书、精装册、喷绘、写真、条幅、工程复印、彩图输出、数码蓝图、设计名片、宣传页、画册等">
  <meta name="description" content="东航包装印刷网，承接大量纸质印刷品（如纸袋、纸杯、纸碗、奶包、快递袋、纸箱等印刷）、塑料薄膜、快递袋、无纺布、商标广告、地图画册、宣传画册、书刊封面、日历、年历
奖牌、工作牌、证书、精装册、喷绘、写真、条幅、工程复印、彩图输出、数码蓝图、设计名片、宣传页、画册等">
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
<!--  热门-->
<!--  <div class="p-wrap hot-wrap">-->
<!--    <h2 class="p-title">热门产品</h2>-->
<!--    <ul class="row">-->
<!--      --><?php //foreach($hot as $v){?>
<!--      <li class="col-md-2 col-sm-4 col-xs-4">-->
<!--        <a href="/details/--><?php //echo $v['id']?><!--.html">-->
<!--          <div>-->
<!--            <img src="--><?php //echo $v['pic']?><!--" alt="">-->
<!--          </div>-->
<!--        </a>-->
<!--      </li>-->
<!--      --><?php //}?>
<!--    </ul>-->
<!--  </div>-->
<!-- 纸质-->
  <div class="p-wrap paper-wrap" id="footZZ">
    <h2 class="p-title">纸质印刷</h2>
    <ul class="row">
      <?php foreach($arr['zhizhi'] as $k=>$v){?>
        <li class="col-md-4 col-sm-4 col-xs-4">
          <a href="/details/<?php echo $v['id']?>.html">
            <div>
              <img src="<?php echo $v['pic']?>" alt="">
            </div>
          </a>
        </li>
      <?php }?>
    </ul>
  </div>
<!--  黑白-->
  <div class="p-wrap black-wrap" id="footHB">
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
<!--  塑料-->
  <div class="p-wrap plastic-wrap" id="footSL">
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
<!--  胶印-->
  <div class="p-wrap offset-wrap" id="footJY">
    <h2 class="p-title">胶印</h2>
    <ul class="row">
      <?php foreach($arr['jiaoyin'] as $k=>$v){?>
        <li class="col-md-4 col-sm-4 col-xs-4">
          <a href="/details/<?php echo $v['id']?>.html">
            <div>
              <img src="<?php echo $v['pic']?>" alt="">
            </div>
          </a>
        </li>
      <?php }?>
    </ul>
  </div>
<!--  设计-->
  <div class="p-wrap custom-wrap" id="footSJ">
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
<!--  图文-->
  <div class="p-wrap text-wrap" id="footTW">
    <h2 class="p-title">图文输出</h2>
    <ul class="row">
      <?php foreach($arr['tuwen'] as $k=>$v){?>
        <li class="col-md-3 col-sm-3 col-xs-3">
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
<script src="/cn/js/common.js"></script>
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