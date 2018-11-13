<!DOCTYPE html>
<html lang="ru">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?php echo $title;?></title>
  <meta name="description" content="<?php echo $description; ?>"/>
  <link rel="canonical" href="<?php echo $canonical; ?>" />
  <meta name="author" content="MYGOODNITE">
  <?php if (publisher()): ?>
    <link href="<?php echo publisher() ?>" rel="publisher" /><?php endif; ?> 
  <link href="<?php echo site_url();?>themes/my/assets/css/bootstrap.min.css" rel="stylesheet">
  <link href="<?php echo site_url();?>themes/my/assets/css/animate.min.css" rel="stylesheet"> 
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">  
  <link href="<?php echo site_url();?>themes/my/assets/css/lightbox.css" rel="stylesheet">
  <link href="<?php echo site_url();?>themes/my/assets/css/main.css" rel="stylesheet">
  <link href="<?php echo site_url();?>themes/my/assets/css/blog.css" rel="stylesheet">
  <link id="css-preset" href="<?php echo site_url();?>themes/my/assets/css/presets/preset7.css" rel="stylesheet">
  <link href="<?php echo site_url();?>themes/my/assets/css/responsive.css" rel="stylesheet">
  

  <!--[if lt IE 9]>
    <script src="<?php echo site_url();?>themes/my/assets/js/html5shiv.js"></script>
    <script src="<?php echo site_url();?>themes/my/assets/js/respond.min.js"></script>
  <![endif]-->
  
  <link href='http://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700' rel='stylesheet' type='text/css'>
  <link rel="shortcut icon" href="<?php echo site_url();?>themes/my/assets/images/favicon.ico">
  <link rel="apple-touch-icon" sizes="120x120" href="<?php echo site_url();?>themes/my/assets/images/apple-touch-icon.png">
  <link rel="icon" type="image/png" sizes="32x32" href="<?php echo site_url();?>themes/my/assets/images/favicon-32x32.png">
  <link rel="icon" type="image/png" sizes="16x16" href="<?php echo site_url();?>themes/my/assets/images/favicon-16x16.png">
  <link rel="manifest" href="site.webmanifest">
  <link rel="mask-icon" href="<?php echo site_url();?>themes/my/assets/images/safari-pinned-tab.svg" color="#5bbad5">
  <meta name="msapplication-TileColor" content="#da532c">
  <meta name="theme-color" content="#ffffff">  
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<?php     
    if (isset($_GET['search'])) {
        $search = $_GET['search'];
        $url = site_url() . 'search/' . remove_accent($search);
        header("Location: $url");
    }
?>
<body>
  <!--.preloader-->
  <div class="preloader"> <i class="fas fa-circle-notch fa-spin"></i></div>
  <!--/.preloader-->
  
<?php if (facebook()) { echo facebook(); } ?>
<?php if (login()) { toolbar(); } ?>

  <header id="home">
		<div class="header_top"><!--header_top-->
			<div class="container">
				<div class="row align-items-start">
					<div class="col-sm-8">
						<div class="contactinfo">
							<ul class="nav nav-pills">
								<li id="wcons-topttl"><a href="/#"><i class="fas fa-hashtag"></i>nitetronic goodnite™: умная подушка от храпа</a></li>
								<li><a href="/#"><i class="fas fa-phone"></i> +7 812 123 00 00</a></li>
								<li><a href="/#contact"><i class="fas fa-envelope" data-toggle="tooltip" title="Заполнить контактную форму"></i> info@mygoodnite.ru</a></li>
							</ul>
						</div>
					</div>
					<div class="col-sm-4">
						<div class="top-social-icons pull-right">
							<ul class="nav  navbar-nav">
								<li><a href="https://www.facebook.com/goodniteru/" data-toggle="tooltip" title="Goodnite Facebook: fb.com/goodniteru"><i class="fab fa-facebook"></i></a></li>
								<li><a href="https://twitter.com/GOODNITERU" data-toggle="tooltip" title="Goodnite Twitter: @GOODNITERU"><i class="fab fa-twitter"></i></a></li>
								<li><a href="https://vk.com/public158164066" data-toggle="tooltip" title="Goodnite ВКонтакте: vk.com/public158164066"><i class="fab fa-vk"></i></a></li>
								<li><a href="#" data-toggle="tooltip" title="Goodnite Skype ID: "><i class="fab fa-skype"></i></a></li>
								<li><a href="#" data-toggle="tooltip" title="Goodnite WhatsApp: +7 921 9642700"><i class="fab fa-whatsapp"></i></a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div><!--/header_top-->      

    <div class="main-nav">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Меню сайта</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="/">
			<div class="col-xs-x hidden-sm hidden-md hidden-lg">
				<img class="img-responsive" src="<?php echo site_url();?>themes/my/assets/images/goodnite-logo-dark-44.png" style="border-radius: 5px;" alt="logo">
			</div>
			<div class="hidden-xs col-sm-x col-md-x col-lg-x">
				<img class="img-responsive" src="<?php echo site_url();?>themes/my/assets/images/goodnite-logo-dark-140.png" style="border-radius: 5px;" alt="logo">
			</div>
          </a>                    
        </div>
        <div class="collapse navbar-collapse">
          <ul class="nav navbar-nav navbar-right" >                 
            <li class="scroll active"><a href="/"><i class="fas fa-home fa-lg"></i></a></li>   <!--TODO  заменить на корень сайта -->
			<li class="dropdown scroll">
				<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">О храпе <span class="caret"></span></a>
				<ul class="dropdown-menu">
					<li><a href="/category/news">Сонные новости</a></li>
					<li><a href="/snoring">Что такое храп</a></li>
					<li><a href="/clinical-study">Клинические исследования</a></li>
					<li><a href="/community">Сообщество профессионалов</a></li>
					<li><a href="/blog">Блог</a></li>			<!--TODO  заменить на корень блога после подключения CMS -->
				</ul>
			</li>
            <li class="scroll"><a href="/#services">Преимущества</a></li> 
            <li><a href="/faq">Частые Вопросы</a></li>
            <li class="scroll"><a href="/#contact">Контакты</a></li> 
			<li class="scroll"><a href="/#purchase" ><i class="fas fa-cart-arrow-down fa-lg"></i></a></li>
          </ul>
        </div>
      </div>
    </div><!--/#main-nav-->
  </header> <!--/#home-->


    <?php echo content();?>
    <hr>
	
	
  <footer id="footer">
    <div class="footer-top wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="300ms">
      <div class="container">
        <div class="row"> 
          <div class="col-sm-3 col-lg-4">
				<div class="footer-logo">
					<img class="img-responsive" src="<?php echo site_url();?>themes/my/assets/images/goodnite-logo-dark-140.png" style="border-radius: 5px;" alt="logo">				
				</div>
		  </div>
          <div class="col-sm-6 col-lg-4">
				<div class="footer-logo">
					<a href="/"><img class="img-responsive" src="<?php echo site_url();?>themes/my/assets/images/nitetronic-LOGO_header_transparent.png" alt="" style="margin: auto;"></a>
				</div>
		  </div>
          <div class="col-sm-3 col-lg-4">
				<div class="footer-logo">
				<img class="img-responsive" src="<?php echo site_url();?>themes/my/assets/images/german-border.png" alt="" style="margin: auto;">
				<div class="centered">Разработано в Германии</div>
				</div>
		  </div>
  	    </div>
        <div class="row"> 
          <div class="col-sm-6 col-sm-offset-3 col-lg-4 col-lg-offset-4">
		  
			<div class="social-icons">
			<ul>
				<li><a class="envelope" href="mailto:info@mygoodnite.ru"><i class="fas fa-envelope"></i></a></li>
				<li><a class="facebook" href="https://www.facebook.com/goodniteru/" data-toggle="tooltip" title="GOODNITE Facebook: fb.com/goodniteru"><i class="fab fa-facebook"></i></a></li>
				<li><a class="vk" href="https://vk.com/public158164066" data-toggle="tooltip" title="GOODNITE ВКонтакте: vk.com/public158164066"><i class="fab fa-vk"></i></a></li> 
				<li><a class="twitter" href="https://twitter.com/GOODNITERU" data-toggle="tooltip" title="GOODNITE Twitter: @GOODNITERU"><i class="fab fa-twitter"></i></a></li> 
				<li><a class="skype" href="#" data-toggle="tooltip" title="GOODNITE Skype ID: "><i class="fab fab fa-skype"></i></a></li>
				<li><a class="whatsapp" href="#" data-toggle="tooltip" title="GOODNITE WhatsApp: +7 921 10000000"><i class="fab fa-whatsapp"></i></a></li>
						
			</ul>
			</div>
		  </div>
      </div>
	  </div>
    </div>
    <div class="footer-bottom">
      <div class="container">
        <div class="row">
          <div class="col-sm-6">
            <p>&copy; 2018 MyGoodnite. Умная подушка от храпа.</p>
          </div>
          <div class="col-sm-6">
            <p class="pull-right">Разработка <a href="<?php echo site_url();?>">#MYGOODNITE</a></p>
          </div>
        </div>
      </div>
    </div>
  </footer>

  <script type="text/javascript" src="<?php echo site_url();?>themes/my/assets/js/jquery.js"></script>
  <script type="text/javascript" src="<?php echo site_url();?>themes/my/assets/js/bootstrap.min.js"></script>
  <!-- script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=true"></script -->
  <script type="text/javascript" src="<?php echo site_url();?>themes/my/assets/js/jquery.inview.min.js"></script>
  <script type="text/javascript" src="<?php echo site_url();?>themes/my/assets/js/jquery.bcSwipe.min.js"></script>   <!-- touch support for bs.carousel -->
  <script type="text/javascript" src="<?php echo site_url();?>themes/my/assets/js/wow.min.js"></script>
  <script type="text/javascript" src="<?php echo site_url();?>themes/my/assets/js/mousescroll.js"></script>
  <script type="text/javascript" src="<?php echo site_url();?>themes/my/assets/js/smoothscroll.js"></script>
  <script type="text/javascript" src="<?php echo site_url();?>themes/my/assets/js/jquery.countTo.js"></script>
  <script type="text/javascript" src="<?php echo site_url();?>themes/my/assets/js/lightbox.min.js"></script>
  <script type="text/javascript" src="<?php echo site_url();?>themes/my/assets/js/main.pages.js"></script>

  <?php if (analytics()): ?><?php echo analytics() ?><?php endif; ?>
</body>
</html>
