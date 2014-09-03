<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="<?php $this->options->themeUrl('bootstrap/css/bootstrap.min.css'); ?>">
    <link rel="stylesheet" href="<?php $this->options->themeUrl('style.css'); ?>">
    <script src="<?php $this->options->themeUrl('js/jquery-1.11.1.min.js'); ?>"></script>
    <script src="<?php $this->options->themeUrl('bootstrap/js/bootstrap.min.js'); ?>"></script>
    <script src="<?php $this->options->themeUrl('js/githubRepoWidget.min.js') ?>"></script>
    <script src="<?php $this->options->themeUrl('js/scrollUp.min.js'); ?>"></script>
    <script src="<?php $this->options->themeUrl('js/lab.js') ?>"></script>
    <title></title>
  </head>
  <body>
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#menus">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="<?php $this->options->siteUrl(); ?>">Yue Lab</a>
        </div>
        <div class="collapse navbar-collapse" id="menus">
          <ul class="nav navbar-nav">
            <li <?php if($this->is('index')): ?> class="active" <?php endif; ?> >
              <a href="<?php $this->options->siteUrl(); ?>">首页</a>
            </li>
            <?php $this->widget('Widget_Metas_Category_List')->to($cats); ?>
            <?php while($cats->next()): ?>
            <li <?php if($this->is('category', $cats->slug)): ?> class="active" <?php endif; ?> >
              <a href="<?php $cats->permalink(); ?>" title="<?php $cats->name(); ?>"><?php $cats->name(); ?></a>
            </li>
            <?php endwhile; ?>
          </ul>
          <ul class="nav navbar-nav navbar-right">
            <?php if($this->user->hasLogin()): ?>
            <li><a href="<?php $this->options->adminUrl('profile.php'); ?>"><?php $this->author->gravatar(18); ?> <?php $this->user->screenName(); ?></a></li>
            <li><a href="<?php $this->options->logoutUrl(); ?>">退出</a></li>
            <?php else: ?>
            <li><a href="<?php $this->options->loginUrl(); ?>">登录</a></li>
            <li><a href="<?php $this->options->registerUrl(); ?>">注册</a></li>
            <?php endif; ?>
          </ul>
        </div>
      </div>
    </nav>

    <!-- Carousel
    ================================================== -->
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
      <!-- Indicators -->
      <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
        <li data-target="#myCarousel" data-slide-to="2"></li>
      </ol>
      <div class="carousel-inner">
        <div class="item active">
          <img src="<?php $this->options->themeUrl('img/monkey.jpg'); ?>" alt="First slide">
          <div class="container">
            <div class="carousel-caption">
              <h1>Example headline.</h1>
              <p>Note: If you're viewing this page via a <code>file://</code> URL, the "next" and "previous" Glyphicon buttons on the left and right might not load/display properly due to web browser security rules.</p>
              <p><a class="btn btn-lg btn-primary" href="#" role="button">Sign up today</a></p>
            </div>
          </div>
        </div>
      </div>
      <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev"><span class="glyphicon glyphicon-chevron-left"></span></a>
      <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next"><span class="glyphicon glyphicon-chevron-right"></span></a>
    </div><!-- /.carousel -->

    <div class="container introduce">
      <div class="row">
        <div class="col-lg-8">
          <h2>关于我们</h2>
          <img src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" style="float:left;width:300px; height:150px;margin:0 10px 10px 0;">
          中国科学院动物研究所是以动物科学基础研究为主的社会公益型国家级科研机构。主要定位在围绕农业、生态、环境和人类健康及其人与自然协调并存等方面的重大需求和科学问题，在珍稀濒危动物保护、有害动物控制、资源动物可持续利用、动物疾病预警与防控、生殖与发育生物学、动物系统学和进化生物学等领域开展基础性、前瞻性、战略性研究。
        </div>
        <div class="col-lg-4">
          <h2>实验室负责人</h2>
          <img src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" alt="Generic placeholder image" style="width:100%; height:200px;">
          <p>岳碧松,现任四川大学生命科学学院党委书记、教授、博士生导师，重点实验室主任，四川省学术和技术带头人，四川省濒危野生动物保护生物学重点实验室常务副主任。1978年03月-1985年04月 在西南农业大学植物保护系读学士和硕士学位。1985年05月-1988年08月 在中国农业科学院柑桔研究所作科学研究。1988年09月-1991年10月 在西南农业大学攻读昆虫生态学博士学位。1992年01月-1995年03月 在University of Florida (USA)作博士后研究。1995年05月-1998年04月 在四川大学生命科学学院任动物学教授。2001年04月- 在四川大学生命科学学院工作。2006年8月-2007年1月 在Louisiana State University高级研究学者。</p>
        </div>
      </div>

      <hr class="featurette-divider">

      <div class="row head">
        <div class="col-lg-12">
          <h2>实验室老师</h2>
        </div>
      </div>

      <div class="row teachers">
        <div class="col-lg-4">
          <img class="img-circle" src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" alt="Generic placeholder image" style="width: 140px; height: 140px;">
          <h2>Heading</h2>
          <p>Donec sed odio dui. Etiam porta sem malesuada magna mollis euismod. Nullam id dolor id nibh ultricies vehicula ut id elit. Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Praesent commodo cursus magna.</p>
          <p><a class="btn btn-default" href="#" role="button">View details &raquo;</a></p>
        </div><!-- /.col-lg-4 -->
        <div class="col-lg-4">
          <img class="img-circle" src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" alt="Generic placeholder image" style="width: 140px; height: 140px;">
          <h2>Heading</h2>
          <p>Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Cras mattis consectetur purus sit amet fermentum. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh.</p>
          <p><a class="btn btn-default" href="#" role="button">View details &raquo;</a></p>
        </div><!-- /.col-lg-4 -->
        <div class="col-lg-4">
          <img class="img-circle" src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" alt="Generic placeholder image" style="width: 140px; height: 140px;">
          <h2>Heading</h2>
          <p>Donec sed odio dui. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Vestibulum id ligula porta felis euismod semper. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.</p>
          <p><a class="btn btn-default" href="#" role="button">View details &raquo;</a></p>
        </div><!-- /.col-lg-4 -->
      </div>

      <hr class="featurette-divider">

      <div class="row">
        <div class="col-lg-6">
          <h3>新闻动态</h3>
        </div>
        <div class="col-lg-6">
          <h3>近期发表文章</h3>
        </div>
      </div>

      <hr class="featurette-divider">

      <div class="row head">
        <div class="col-lg-12">
          <h2>实验室成员</h2>
        </div>
      </div>

    </div>

    <hr class="featurette-divider">

    <div class="container">
      <div class="row footer">
        <div class="col-lg-7">
          <p>版权归 &copy;2014 四川省濒危野生动物保护生物学重点实验室 所有</p>
          <p>地址：四川省成都市武侯区望江路29号四川大学生命科学学院楼404室 邮编：610064</p>
          <p>本网站由 <a href="http://typecho.org">Typecho</a> 强力驱动, 主题基于 <a href="http://getbootstrap.com/">Bootstrap</a> 前端框架开发</p>
        </div>
        <div class="col-lg-5">
          <h4>友情链接</h4>
          <ul class="list-inline">
            <li><a href="http://www.scu.edu.cn">四川大学</a></li>
            <li><a href="http://life.scu.edu.cn">生命科学学院</a></li>
            <li><a href="http://www.scdwzz.com/">四川动物</a></li>
            <li><a href="http://www.scu.edu.cn">四川大学</a></li>
            <li><a href="http://life.scu.edu.cn">生命科学学院</a></li>
            <li><a href="http://www.scdwzz.com/">四川动物</a></li>
            <li><a href="http://www.scu.edu.cn">四川大学</a></li>
            <li><a href="http://life.scu.edu.cn">生命科学学院</a></li>
            <li><a href="http://www.scdwzz.com/">四川动物</a></li>
          </ul>
        </div>
      </div>
    </div>

  </body>
</html>