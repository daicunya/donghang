<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width,height=device-height,initial-scale=1.0,minimum-scale=1.0,maximum-scale=1.0,user-scable=no">
  <meta name="renderer" content="webkit">
  <link href="https://cdn.bootcss.com/bootstrap/3.3.2/css/bootstrap.min.css" rel="stylesheet">
  <title>关于我们</title>
  <link rel="stylesheet" href="/cn/css/font-awesome.min.css">
  <link rel="stylesheet" href="/cn/css/common.css">
  <link rel="stylesheet" href="/cn/css/about-phone.css">
</head>
<body>
<?php use app\commands\front\NavWidget;?>
<?php NavWidget::begin();?>
<?php NavWidget::end();?>
<div class="about-wrap clearfix" id="aboutWrap">
  <div class="hd">
    <ul class="tab-list">
      <li class="tab-item"><span>关于我们</span></li>
      <li class="tab-item"><span>联系我们</span></li>
      <li class="tab-item"><span>版权声明</span></li>
      <li class="tab-item"><span>订购流程</span></li>
    </ul>
  </div>
  <div class="bd" id="aboutWrap-bd">
    <!--关于我们-->
    <ul class="about-us">
      <li>
        邯郸开发区东航印刷有限公司，是一家新兴的包装印刷公司，公司实力雄厚，拥有国内先进的1.3米幅宽六色机组柔板印刷机，可承印大量纸质印刷品（如纸袋、纸杯、纸碗、奶包、快递袋、纸箱等印刷）本公司主营前期印刷服务,拥有多年的印刷行业从业经验,是一支专业的技术及服务团队。欢迎各包装厂及用户来我厂考察，参观。合作共赢！
      </li>
    </ul>
    <!--联系我们-->
    <ul class="contact-us">
      <li class="contact-item">
        <p><span>服务热线:</span>13513203567</p>
        <p><span>微信号:</span>13513203567</p>
        <p><span>公司地址:</span>河北省邯郸市世纪大街23号</p>
        <div id="phoneMap">
          <img src="/cn/images/map.png" alt="">
        </div>
      </li>
    </ul>
    <!--版权声明-->
    <ul class="copyright">
      <li class="copy-item">
        <div>
          <h4>版权声明</h4>
          <p>东航印刷网坚决遵守与支持我国有关版权的法律法规，坚持尊重与保护版权拥有者的合法权益，由于本网站对于非法转载、侵权行为的发生不具备充分的监控能力，一旦出现侵权情况，用户及版权所有人可联系网站，经核查若情况属实，本网站将在三日内删除相关作品。</p>
          <p>本网站保留在法律允许的范围内对本声明的解释权，并有权随时修改本声明，请注意随时关注本声明的内容。</p>
        </div>
        <div>
          <h4>免责条款</h4>
          <p>本声明未涉及的问题参见国家有关法律法规，当本声明与国家法律法规冲突时，以国家法律法规为准</p>
          <p>本网站如因系统维护或升级而需暂停服务时，将事先公告。若因线路及非本公司控制范围外的硬件故障或其他不可抗力因素而导致暂停服务，于暂停服务期间造成的一切不便于损失，本网站概不负责。</p>
          <p>任何由于黑客攻击、计算机病毒侵入或发作等影响网络正常经营的不可抗力因素而造成的损失，本网站均得免责。因和本网站链接的其他网站所造成的个人资料泄露及由此而导致的任何法律争议和后果，本网站均得免责</p>
          <p>因不可抗力导致造成的任何后果</p>
          <p>凡以任何方式登录本网站或直接、间接使用本网站资料，即表明您已经阅读并接受上述条款。</p>
        </div>
      </li>
    </ul>
    <!--订购流程-->
    <ul class="buy-flow">
      <li>
        <p>QQ咨询：<a href="http://wpa.qq.com/msgrd?v=3&uin=376452812&site=qq&menu=yes">376452812</a>
        <p>微信咨询：13513203567</p>
        <p>电话订购：<a href="tel:13513203567">13513203567</a></p>
      </li>
    </ul>
  </div>
</div>
<?php use app\commands\front\FooterWidget;?>
<?php FooterWidget::begin();?>
<?php FooterWidget::end();?>
<script src="https://cdn.bootcss.com/jquery/2.2.3/jquery.min.js"></script>
<script src="https://cdn.bootcss.com/bootstrap/3.3.2/js/bootstrap.min.js"></script>
<!--<script type="text/javascript" src="http://api.map.baidu.com/api?v=2.0&ak=naQc9Vh2auBWcss2wlmn9filGlE31num"></script>-->
<script type="text/javascript" src="/cn/js/TouchSlide.1.1.js"></script>
</body>
<script>
  TouchSlide({slideCell: "#aboutWrap"});
</script>
</html>