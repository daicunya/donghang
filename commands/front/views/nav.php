<nav class="navbar navbar-default navbar-fixed-top">
    <div class="container">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                    data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="index.html">
                <img src="/cn/images/logo.png" alt="logo图标">
            </a>
        </div>
        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav">
                <li class="active"><a href="/index.html">首页<span class="sr-only">(current)</span></a></li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true"
                       aria-expanded="false">黑白印刷<span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <?php foreach($data['heibai'] as $v){?>
                            <li><a href="/details/<?php echo $v['id']?>.html"><?php echo $v['title']?></a></li>
                        <?php }?>
                    </ul>
                </li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true"
                       aria-expanded="false">柔板印刷<span class="caret"></span></a>
                    <div class="dropdown-menu nav-second clearfix">
                        <ul>
                            <h4>纸质印刷</h4>
                            <?php foreach($data['zhizhi'] as $v){?>
                                <li><a href="/details/<?php echo $v['id']?>.html"><?php echo $v['title']?></a></li>
                            <?php }?>
                        </ul>
                        <ul>
                            <h4>塑料材质印刷</h4>
                            <?php foreach($data['shuliao'] as $v){?>
                                <li><a href="/details/<?php echo $v['id']?>.html"><?php echo $v['title']?></a></li>
                            <?php }?>
                        </ul>
                    </div>
                </li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true"
                       aria-expanded="false">胶印<span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <?php foreach($data['jiaoyin'] as $v){?>
                            <li><a href="/details/<?php echo $v['id']?>.html"><?php echo $v['title']?></a></li>
                        <?php }?>
                    </ul>
                </li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true"
                       aria-expanded="false">设计制作<span class="caret"></span></a>
                    <div class="dropdown-menu nav-second clearfix">
                        <ul>
                            <h4>设计定制</h4>
                            <?php foreach($data['sheji'] as $v){?>
                                <li><a href="/details/<?php echo $v['id']?>,html"><?php echo $v['title']?></a></li>
                            <?php }?>
                        </ul>
                        <ul>
                            <h4>图文输出</h4>
                            <?php foreach($data['tuwen'] as $v){?>
                                <li><a href="/details/<?php echo $v['id']?>,html"><?php echo $v['title']?></a></li>
                            <?php }?>
                        </ul>
                    </div>
                </li>
              <li class="about-pc"><a href="/aboutUs.html">关于我们</a></li>
              <li class="about-phone"><a href="/about-phone.html">关于我们</a></li>
            </ul>
        </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
</nav>
<div class="side-bar">
  <ul>
    <li class="side-wechat">
      <p></p>
      <div>
        <img src="/cn/images/ewm.jpg" alt="微信二维码">
        <span>请扫描二维码</span>
      </div>
    </li>
    <li class="side-qq">
      <a href="http://wpa.qq.com/msgrd?v=3&uin=376452812&site=qq&menu=yes" target="_blank">
        <p></p>
        <div><i class="fa fa-qq"></i></div>
      </a>
    </li>
    <li class="side-tel">
      <p></p>
      <div><i class="fa fa-phone"></i>电话：13513203567</div>
    </li>
    <li class="side-arrow">
      <p></p>
    </li>
  </ul>
</div>