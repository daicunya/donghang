<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width,height=device-height,initial-scale=1.0,minimum-scale=1.0,maximum-scale=1.0,user-scable=no">
  <meta name="renderer" content="webkit">
  <link href="https://cdn.bootcss.com/bootstrap/3.3.2/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/3.4.2/css/swiper.min.css">
  <link rel="stylesheet" href="/cn/css/font-awesome.min.css">
  <title>东航产品-<?php echo $details['title']?></title>
  <meta name="keywords" content="东航包装印刷网，承接大量纸质印刷品（如纸袋、纸杯、纸碗、奶包、快递袋、纸箱等印刷）、塑料薄膜、快递袋、无纺布、商标广告、地图画册、宣传画册、书刊封面、日历、年历
奖牌、工作牌、证书、精装册、喷绘、写真、条幅、工程复印、彩图输出、数码蓝图、设计名片、宣传页、画册等">
  <meta name="description" content="东航包装印刷网，承接大量纸质印刷品（如纸袋、纸杯、纸碗、奶包、快递袋、纸箱等印刷）、塑料薄膜、快递袋、无纺布、商标广告、地图画册、宣传画册、书刊封面、日历、年历
奖牌、工作牌、证书、精装册、喷绘、写真、条幅、工程复印、彩图输出、数码蓝图、设计名片、宣传页、画册等">
  <link rel="stylesheet" href="/cn/css/common.css">
  <link rel="stylesheet" href="/cn/css/details.css">
</head>
<body>
<?php use app\commands\front\NavWidget;?>
<?php NavWidget::begin();?>
<?php NavWidget::end();?>
<div class="container">
  <!--路径导航-->
  <ol class="breadcrumb">
    <li><a href="/index.html">首页</a></li>
    <li class="active"><?php echo $details['title']?></li>
  </ol>
  <div class="detail-wrap clearfix">
    <section class="detail-cnt col-md-8 col-sm-12 col-xs-12">
      <div class="detail-img">
        <?php echo $details['content']?>
<!--        <img src="/cn/images/details01.jpg" alt="">-->
      </div>
    </section>
    <aside class="detail-aside col-md-4">
      <h3>相关产品推荐</h3>
      <ul>
        <?php foreach($related as $v){?>
          <li class="aside-item">
            <div class="aside-img">
              <a href="/details/<?php echo $v['id']?>.html">
                <img src="<?php echo $v['pic']?>" alt="">
              </a>
            </div>
            <a class="prod-name" href="/details/<?php echo $v['id']?>.html"><?php echo $v['title']?></a>
            <p class="prod-introduction" title="<?php echo $v['introduction']?>"><?php echo $v['introduction']?></p>
          </li>
        <?php }?>
      </ul>
    </aside>
  </div>
  <!--移动端相关产品推荐-->
  <div class="recommend-pro">
    <div class="custom-service row">
      <div class="col-sm-2 col-xs-2">
        <img src="/cn/images/customer.png" alt="">
      </div>
      <div class="col-sm-6 col-xs-6">
        <h4>客户服务</h4>
        <p>欢迎随时与我们联系</p>
      </div>
      <div class="col-sm-4 col-xs-4">
        <a href="http://wpa.qq.com/msgrd?v=3&uin=376452812&site=qq&menu=yes"><i class="fa fa-qq"></i></a>
        <a href="tel:13513203567"><i class="fa fa-phone"></i></a>
      </div>
    </div>
    <h3>推荐产品</h3>
    <div class="swiper-container">
      <div class="swiper-wrapper">
        <?php foreach($related as $v){?>
        <div class="swiper-slide">
          <div>
            <a href="/details/<?php echo $v['id']?>.html">
              <img src="<?php echo $v['pic']?>" alt="">
            </a>
          </div>
          <a class="prod-name" href="/details/<?php echo $v['id']?>.html"><?php echo $v['title']?></a>
          <p class="prod-introduction" title="<?php echo $v['introduction']?>"><?php echo $v['introduction']?></p>
        </div>
        <?php }?>
      </div>
      <!-- 如果需要分页器 -->
      <div class="swiper-pagination"></div>
    </div>
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
      pagination: '.swiper-pagination',
      slidesPerView: 2,
      // centeredSlides: true,
      paginationClickable: true,
      spaceBetween: 30,
      freeMode: true
    });
  });
</script>
</html>