<!DOCTYPE html>
<html lang="en">
<head>
    <?php echo head_contents();?>
    <title><?php echo $title;?></title>
    <meta name="description" content="<?php echo $description; ?>"/>
    <link rel="canonical" href="<?php echo $canonical; ?>" />
    <?php if (publisher()): ?>
    <link href="<?php echo publisher() ?>" rel="publisher" /><?php endif; ?> 
    <!-- Bootstrap Core CSS -->
    <link href="<?php echo site_url();?>themes/cleanblog/css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="<?php echo site_url();?>themes/cleanblog/css/clean-blog.css" rel="stylesheet">
    <!-- Custom Fonts -->
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href='http://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
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
<?php if (facebook()) { echo facebook(); } ?>
<?php if (login()) { toolbar(); } ?>
    <!-- Navigation -->
    <nav class="navbar navbar-default navbar-custom navbar-fixed-top">
        <div class="container-fluid">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header page-scroll">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="<?php echo site_url();?>"><?php echo blog_title();?></a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <?php echo menu('navbar-nav navbar-right') ?>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>
    <!-- Page Header -->
    <!-- Set your background image for this header on the line below. -->
    <header class="intro-header">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                    <?php if (isset($is_front)):?>
                        <div class="site-heading">
                            <h1><?php echo blog_title();?></h1>
                            <hr class="small">
                            <span class="subheading"><?php echo blog_tagline();?></span>
                        </div>
                        <style>
                        <?php if(config('cleanblog.homebg') == '') {?>
                            .intro-header {background-image: url('<?php echo site_url();?>themes/cleanblog/img/home-bg.jpg')}
                        <?php } else { ?>
                            .intro-header {background-image: url('<?php echo config('cleanblog.homebg');?>')}
                        <?php } ?>
                        </style>
                    <?php endif;?>
                    <?php if (isset($is_post)):?>
                        <div class="post-heading">
                            <h1><?php echo $p->title;?></h1>
                            <span class="meta">Posted in <?php echo $p->category;?> by <a href="<?php echo $p->authorUrl;?>"><?php echo $p->author;?></a> on <?php echo date('d F Y', $p->date);?></span>
                        </div>
                        <style>
                        <?php if(empty($p->image)) {?>
                            .intro-header {background-image: url('<?php echo site_url();?>themes/cleanblog/img/post-bg.jpg')}
                        <?php } else { ?>
                            .intro-header {background-image: url('<?php echo $p->image;?>')}
                        <?php } ?>
                        </style>
                    <?php endif;?>
                    <?php if (isset($is_page) || isset($is_subpage)):?>
                        <div class="page-heading">
                            <h1><?php echo $p->title;?></h1>
                            <hr class="small">
                            <span class="subheading"><?php echo blog_title();?></span>
                        </div>
                        <style>
                        <?php if(config('cleanblog.pagebg') == '') {?>
                            .intro-header {background-image: url('<?php echo site_url();?>themes/cleanblog/img/home-bg.jpg')}
                        <?php } else { ?>
                            .intro-header {background-image: url('<?php echo config('cleanblog.pagebg');?>')}
                        <?php } ?>
                        </style>
                    <?php endif;?>
                    <?php if (isset($is_profile)):?>
                        <div class="page-heading">
                            <h1><?php echo $name ?></h1>
                            <hr class="small">
                            <span class="subheading"><?php echo blog_title();?></span>
                        </div>
                        <style>
                        <?php if(config('cleanblog.profilebg') == '') {?>
                            .intro-header {background-image: url('<?php echo site_url();?>themes/cleanblog/img/about-bg.jpg')}
                        <?php } else { ?>
                            .intro-header {background-image: url('<?php echo config('cleanblog.profilebg');?>')}
                        <?php } ?>
                        </style>
                    <?php endif;?>
                    <?php if (isset($is_blog)):?>
                        <div class="page-heading">
                            <h1>Blog</h1>
                            <hr class="small">
                            <span class="subheading"><?php echo blog_title();?></span>
                        </div>
                        <style>
                        <?php if(config('cleanblog.blogbg') == '') {?>
                            .intro-header {background-image: url('<?php echo site_url();?>themes/cleanblog/img/post-bg.jpg')}
                        <?php } else { ?>
                            .intro-header {background-image: url('<?php echo config('cleanblog.blogbg');?>')}
                        <?php } ?>
                        </style>
                    <?php endif;?>
                    <?php if (isset($is_category)):?>
                        <div class="page-heading">
                            <h1><?php echo $category->title;?></h1>
                            <hr class="small">
                            <span class="subheading"><?php echo blog_title();?></span>
                        </div>
                        <style>
                        <?php if(config('cleanblog.categorybg') == '') {?>
                            .intro-header {background-image: url('<?php echo site_url();?>themes/cleanblog/img/home-bg.jpg')}
                        <?php } else { ?>
                            .intro-header {background-image: url('<?php echo config('cleanblog.categorybg');?>')}
                        <?php } ?>
                        </style>
                    <?php endif;?>
                    <?php if (isset($is_tag)):?>
                        <div class="site-heading">
                            <h1><?php echo $tag->title;?></h1>
                            <hr class="small">
                            <span class="subheading"><?php echo blog_title();?></span>
                        </div>
                        <style>
                        <?php if(config('cleanblog.tagbg') == '') {?>
                            .intro-header {background-image: url('<?php echo site_url();?>themes/cleanblog/img/home-bg.jpg')}
                        <?php } else { ?>
                            .intro-header {background-image: url('<?php echo config('cleanblog.tagbg');?>')}
                        <?php } ?>
                        </style>
                    <?php endif;?>
                    <?php if (isset($is_archive)):?>
                        <div class="site-heading">
                            <h1><?php echo $archive->title;?></h1>
                            <hr class="small">
                            <span class="subheading"><?php echo blog_title();?></span>
                        </div>
                        <style>
                        <?php if(config('cleanblog.archivebg') == '') {?>
                            .intro-header {background-image: url('<?php echo site_url();?>themes/cleanblog/img/home-bg.jpg')}
                        <?php } else { ?>
                            .intro-header {background-image: url('<?php echo config('cleanblog.archivebg');?>')}
                        <?php } ?>
                        </style>
                    <?php endif;?>
                    <?php if (isset($is_search)):?>
                        <div class="site-heading">
                            <h1><?php echo $search->title;?></h1>
                            <hr class="small">
                            <span class="subheading"><?php echo blog_title();?></span>
                        </div>
                        <style>
                        <?php if(config('cleanblog.searchbg') == '') {?>
                            .intro-header {background-image: url('<?php echo site_url();?>themes/cleanblog/img/home-bg.jpg')}
                        <?php } else { ?>
                            .intro-header {background-image: url('<?php echo config('cleanblog.searchbg');?>')}
                        <?php } ?>
                        </style>
                    <?php endif;?>
                    <?php if (isset($is_404) || isset($is_404search)):?>
                        <div class="site-heading">
                            <h1>Error 404!</h1>
                            <hr class="small">
                            <span class="subheading"><?php echo blog_tagline();?></span>
                        </div>
                        <style>
                        <?php if(config('cleanblog.404bg') == '') {?>
                            .intro-header {background-image: url('<?php echo site_url();?>themes/cleanblog/img/home-bg.jpg')}
                        <?php } else { ?>
                            .intro-header {background-image: url('<?php echo config('cleanblog.404bg');?>')}
                        <?php } ?>
                        </style>
                    <?php endif;?>
                    <?php if (!empty($breadcrumb)): ?>
                        <div class="breadcrumb <?php if (isset($is_post)):?>left<?php endif;?>"><?php echo $breadcrumb ?></div>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </header>
    <?php echo content();?>
    <hr>
    <!-- Footer -->
    <footer>
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                    <ul class="list-inline text-center">
                        <li>
                            <a href="<?php echo config('social.twitter');?>">
                                <span class="fa-stack fa-lg">
                                    <i class="fa fa-circle fa-stack-2x"></i>
                                    <i class="fa fa-twitter fa-stack-1x fa-inverse"></i>
                                </span>
                            </a>
                        </li>
                        <li>
                            <a href="<?php echo config('social.facebook');?>">
                                <span class="fa-stack fa-lg">
                                    <i class="fa fa-circle fa-stack-2x"></i>
                                    <i class="fa fa-facebook fa-stack-1x fa-inverse"></i>
                                </span>
                            </a>
                        </li>
                        <li>
                            <a href="<?php echo config('social.google');?>">
                                <span class="fa-stack fa-lg">
                                    <i class="fa fa-circle fa-stack-2x"></i>
                                    <i class="fa fa-google-plus fa-stack-1x fa-inverse"></i>
                                </span>
                            </a>
                        </li>
                        <li>
                            <a href="<?php echo site_url();?>feed/rss">
                                <span class="fa-stack fa-lg">
                                    <i class="fa fa-circle fa-stack-2x"></i>
                                    <i class="fa fa-rss fa-stack-1x fa-inverse"></i>
                                </span>
                            </a>
                        </li>
                    </ul>
                    <div class="copyright text-muted"><?php echo copyright();?></div>
                </div>
            </div>
        </div>
    </footer>
    <!-- jQuery -->
    <script src="<?php echo site_url();?>themes/cleanblog/js/jquery.min.js"></script>
    <!-- Bootstrap Core JavaScript -->
    <script src="<?php echo site_url();?>themes/cleanblog/js/bootstrap.min.js"></script>
    <!-- Custom Theme JavaScript -->
    <script src="<?php echo site_url();?>themes/cleanblog/js/clean-blog.js"></script>
    <?php if (analytics()): ?><?php echo analytics() ?><?php endif; ?>
</body>
</html>





<!DOCTYPE html>
<html lang="ru">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="Умная подушка от храпа nitetronic goodnite, единственная клинически опробованная smart-подушка, определяет положеие головы и поворачивает ее. Разработано в Германии">
  <meta name="author" content="MYGOODNITE">
  <title>Умная подушка от храпа goodnite</title>
  <link href="<?php echo site_url();?><?php echo $views.root;?>/assets/css/bootstrap.min.css" rel="stylesheet">
  <link href="<?php echo site_url();?><?php echo $views.root;?>/assets/css/animate.min.css" rel="stylesheet"> 
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">  
  <link href="<?php echo site_url();?><?php echo $views.root;?>/assets/css/lightbox.css" rel="stylesheet">
  <link href="<?php echo site_url();?><?php echo $views.root;?>/assets/css/main.css" rel="stylesheet">
  <link id="css-preset" href="<?php echo site_url();?><?php echo $views.root;?>/assets/css/presets/preset7.css" rel="stylesheet">
  <link href="<?php echo site_url();?><?php echo $views.root;?>/assets/css/responsive.css" rel="stylesheet">

  <!--[if lt IE 9]>
    <script src="assets/js/html5shiv.js"></script>
    <script src="assets/js/respond.min.js"></script>
  <![endif]-->
  
  <link href='http://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700' rel='stylesheet' type='text/css'>
  <link rel="shortcut icon" href="<?php echo site_url();?><?php echo $views.root;?>/assets/images/favicon.ico">
  <link rel="apple-touch-icon" sizes="120x120" href="<?php echo site_url();?><?php echo $views.root;?>/assets/images/apple-touch-icon.png">
  <link rel="icon" type="image/png" sizes="32x32" href="<?php echo site_url();?><?php echo $views.root;?>/assets/images/favicon-32x32.png">
  <link rel="icon" type="image/png" sizes="16x16" href="<?php echo site_url();?><?php echo $views.root;?>/assets/images/favicon-16x16.png">
  <link rel="manifest" href="site.webmanifest">
  <link rel="mask-icon" href="<?php echo site_url();?><?php echo $views.root;?>/assets/images/safari-pinned-tab.svg" color="#5bbad5">
  <meta name="msapplication-TileColor" content="#da532c">
  <meta name="theme-color" content="#ffffff">  
</head><!--/head-->

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
								<li id="wcons-topttl"><a href="#"><i class="fas fa-hashtag"></i>nitetronic goodnite™: умная подушка от храпа</a></li>
								<li><a href="#"><i class="fas fa-phone"></i> +7 812 123 00 00</a></li>
								<li><a href="#contact"><i class="fas fa-envelope" data-toggle="tooltip" title="Заполнить контактную форму"></i> info@mygoodnite.ru</a></li>
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

    <div id="home-slider" class="carousel slide carousel-fade" data-ride="carousel" data-interval="8000">
      <div class="carousel-inner">
		<!-- Indicators -->
		<ol class="carousel-indicators">
			<li data-target="#home-slider" data-slide-to="0" class="active"></li>
			<li data-target="#home-slider" data-slide-to="1"></li>
			<li data-target="#home-slider" data-slide-to="2"></li>
			<li data-target="#home-slider" data-slide-to="3"></li>
		</ol>
        <div class="item active slide1" >
          <div class="caption">
            <h1 class="animated fadeInLeftBig" data-animation-wipe="animated fadeOutLeftBig">При храпе можно закрыть уши <span>обычной подушкой</span></h1>
            <h2 class="animated fadeInRightBig" data-animation-wipe="animated fadeOut">Но есть и более современное решение</h2>
            <a data-scroll class="btn btn-start animated fadeInUpBig" href="#about-us" data-animation-wipe="btn btn-start animated fadeOut">посмотреть</a>
          </div>
        </div>
        <div class="item slide2">
          <div class="caption">
            <h1 class="animated fadeInLeftBig" data-animation-wipe="animated fadeOutLeftBig">Подушка  <span>goodnite</span> сама услышит храп, определит положение головы</h1>
            <h2 class="animated fadeInRightBig" data-animation-wipe="animated fadeOut">и бережно повернет голову храпящего</h2>
            <a data-scroll class="btn btn-start animated fadeInUpBig" href="#services" data-animation-wipe="btn btn-start animated fadeOut">а как это работает?</a>
          </div>
        </div>
        <div class="item slide3" >
          <div class="caption">
            <h1 class="animated fadeInLeftBig" data-animation-wipe="animated fadeOutLeftBig">nitetronic goodnite -  единственная клинически апробированная <span>умная подушка против храпа</span></h1>
            <h2 class="animated fadeInRightBig" data-animation-wipe="animated fadeOut">и еще она подключается к смартфону</h2>
            <a data-scroll class="btn btn-start animated fadeInUpBig" href="#portfolio" data-animation-wipe="btn btn-start animated fadeOut">подробнее</a>
          </div>
        </div>
        <div class="item slide4">
          <div class="caption">
            <h1 class="animated fadeInLeftBig" data-animation-wipe="animated fadeOutLeftBig">Сейчас, приобретите <span>Smart-подушку goodnite</span> со скидкой 20% <strong>за 12990 рублей</strong></h1>
            <h2 class="animated fadeInRightBig" data-animation-wipe="animated fadeOut">хороший сон того стоит</h2>
            <a data-scroll class="btn btn-start animated fadeInUpBig" href="#purchase" data-animation-wipe="btn btn-start animated fadeOut">купить goodnite</a>
          </div>
        </div>
      </div>
      <a class="left-control" href="#home-slider" data-slide="prev"><i class="fas fa-angle-left"></i></a>
      <a class="right-control" href="#home-slider" data-slide="next"><i class="fas fa-angle-right"></i></a>

      <a id="tohash" href="#services"><i class="fas fa-angle-down"></i></a>

    </div><!--/#home-slider-->
	
    <div class="main-nav">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Меню сайта</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="index.html">
			<div class="col-xs-x hidden-sm hidden-md hidden-lg">
				<img class="img-responsive" src="<?php echo site_url();?><?php echo $views.root;?>/assets/images/goodnite-logo-dark-44.png" style="border-radius: 5px;" alt="logo">
			</div>
			<div class="hidden-xs col-sm-x col-md-x col-lg-x">
				<img class="img-responsive" src="<?php echo site_url();?><?php echo $views.root;?>/assets/images/goodnite-logo-dark-140.png" style="border-radius: 5px;" alt="logo">
			</div>
          </a>                    
        </div>
        <div class="collapse navbar-collapse">
          <ul class="nav navbar-nav navbar-right">                 
            <li class="scroll active"><a href="#home"><i class="fas fa-home fa-lg"></i></a></li>
			<li class="dropdown">
				<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">О храпе <span class="caret"></span></a>
				<ul class="dropdown-menu">
					<li><a href="news.html">Сонные новости</a></li>
					<li><a href="snoring.html">Что такое храп</a></li>
					<li><a href="clinical-study.html">Клинические исследования</a></li>
					<li><a href="community.html">Сообщество профессионалов</a></li>
					<li><a href="blog.html">Блог</a></li>
				</ul>
			</li>			
            <li class="scroll"><a href="#services">Преимущества</a></li> 
            <li class="scroll"><a href="faq.html">Частые Вопросы</a></li>
            <li class="scroll"><a href="#contact">Контакты</a></li> 
			<li class="scroll"><a href="#purchase" data-toggle="modal" data-target="#exampleModalCenter"><i class="fas fa-cart-arrow-down fa-lg"></i></a></li>
			
          </ul>
        </div>
      </div>
    </div><!--/#main-nav-->
  </header> <!--/#home-->
  
   <section id="about-us" class="parallax">
    <div class="container">
      <div class="row">
        <div class="col-sm-7">
          <div class="about-info wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="300ms">
            <h2>Смарт-подушка от храпа goodnite™ с инновационной технологией.</h2>

			<p><strong>goodnite™ от Nitetronic</strong> – это запатентованная smart-подушка против храпа, использующая 6 воздушных камер для деликатных и неощутимых поворотов головы пользователя во время сна. 
			Повороты способствуют расширению дыхательных путей для свободного прохождения воздуха, что ведет к прекращению храпа.</p>

			<p>Также подушка оснащена датчиками положения головы, сенсорами и может работать как автономно, так и в паре со специальным мобильным приложением Nitelink2.</p>

			<p>Это умное устройство в форме подушки впервые было созданно в 2011 году немецкими инженерами совместно со специалистами по сну и храпу. Сейчас в продаже обновленый продукт</p>

			<p>Смарт-подушка помогает избавиться от храпа в домашних условиях с максимальной эффективностью и комфортом!</p>
			
			<img class="img-responsive" src="<?php echo site_url();?><?php echo $views.root;?>/assets/images/goodnite-anti-snore.jpg" style="opacity: 0.75;" alt="">
          </div>
        </div>
        <div class="col-sm-5">
          <div class="our-skills wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="300ms">
            <h2>Факты о подушке goodnite™</h2>
            <div class="single-skill wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="300ms">
              <p class="lead">Гарантированный результат в снижении храпа на 67% минимум (обычно на 80-90%) или полном его прекращении.</p>
              <div class="progress">
                <div class="progress-bar progress-bar-primary six-sec-ease-in-out" role="progressbar"  aria-valuetransitiongoal="67"></div>
              </div>
            </div>
            <div class="single-skill wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="400ms">
              <p class="lead">Улучшение качества сна как храпящего, так и его партнера.</p>
              <div class="progress">
                <div class="progress-bar progress-bar-primary six-sec-ease-in-out" role="progressbar"  aria-valuetransitiongoal="100"></div>
              </div>
            </div>
            <div class="single-skill wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="500ms">
              <p class="lead">Самое удобное средство от храпа из существующих.</p>
              <div class="progress">
                <div class="progress-bar progress-bar-primary six-sec-ease-in-out" role="progressbar"  aria-valuetransitiongoal="100"></div>
              </div>
            </div>
            <div class="single-skill wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="600ms">
              <p class="lead">Значительное снижение рисков серьезных заболеваний, связанных с храпом.</p>
              <div class="progress">
                <div class="progress-bar progress-bar-primary six-sec-ease-in-out" role="progressbar"  aria-valuetransitiongoal="100"></div>
              </div>
            </div>
            <div class="single-skill wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="700ms">
              <p class="lead">Популярность подушки на рынках Европы, США, Канады и в Азиатских странах. Независимая положительная оценка российских потребителей, например <a href="https://irecommend.ru/content/smart-podushka-ot-khrapa-nitetronic-goodnite">IRecommend</a></p>
              <div class="progress">
                <div class="progress-bar progress-bar-primary six-sec-ease-in-out" role="progressbar"  aria-valuetransitiongoal="100"></div>
              </div>
            </div>
            <div class="single-skill wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="800ms">
              <p class="lead">Возможность следить за результатами работы подушки и показаниями сна с помощью мобильного приложения.</p>
              <div class="progress">
                <div class="progress-bar progress-bar-primary six-sec-ease-in-out" role="progressbar"  aria-valuetransitiongoal="100"></div>
              </div>
            </div>
            <div class="single-skill wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="900ms">
              <p class="lead">Большой размер подушки 60х40х6 см.</p>
              <div class="progress">
                <div class="progress-bar progress-bar-primary six-sec-ease-in-out" role="progressbar"  aria-valuetransitiongoal="100"></div>
              </div>
            </div>
          </div>
        </div>
      </div> <!-- row - about -->
    </div>
  </section> <!--/#about-us-->
 
  <section id="services">
    <div class="container">
      <div class="heading wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="300ms">
        <div class="row">
          <div  class="col-sm-7">
            <h2 class="text-center">Что вы получаете</h2>
			<ul class="services-what">
            <li>Подушка поставляется в коробке размером 82x46x15см, вес 5,8кг.</li>
            <li>goodnite подушка с моющейся наволочкой</li>
			<li>Электронный блок управления</li>
			<li>Инструкция пользователя, гарантийная карта</li>
			<li>Источник питания с переходным кабелем</li>
			</ul>
          </div>
          <div  class="col-sm-5">
			<img class="img-responsive" src="assets/images/nitetronic2.jpg" alt="">
          </div>
        </div> 
      </div>
	  
      <div class="heading wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="300ms" >
        <div class="row">
          <div class="text-center col-sm-6" style="background-color: #eee; margin-bottom: 50px;">
            <h2>Как работает подушка goodnite.</h2>
			<div class="services-what text-justify"> 
			<p>Goodnite продолжительно отслеживает дыхание пользователя. При выявлении признаков храпа устройство мягко автоматически поворачивает голову пользователя на сторону. 
			Поворот головы в сторону увеличивает расстояние между языком и горлом, что останавливает вибрацию мягких тканей в верхних дыхательных путях и понижают громкость храпа, также одновременно улучшает дыхание. 
			Воздушная камера внутри подушки остается наполненной в течение некоторого периода, поддерживая голову в определенном положении для того, чтобы предотвратить повторение храпа.</p>
			<p>Goodnite фокусируется на храпе человека, голова которого лежит на подушке. Это препятствует непреднамеренным действиям в отношении храпа супруга/и. 
			Пожалуйста, придерживайтесь расстояния 10 см между goodnite и подушкой вашего партнера.</p>
			<p>Эффективность goodnite и «Качество сна» может быть определено при использовании приложения на Nitelink2 на смартфонах Android или iOs.</p>
           </div>
          </div> 
          <div class="text-center col-sm-6">
			<img class="img-responsive" src="<?php echo site_url();?><?php echo $views.root;?>/assets/images/Optimized-Nitetronic_Tech_Drawing_with_Rus_Labels_654.jpg" alt="">
          </div> 
        </div>
      </div>
    </div>
  </section><!--/#services-->
	  
  <section id="advantage" class="parallax">
    <div class="container">
      <div class="heading wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="300ms">
        <div class="row">
          <div class="text-center col-sm-8 col-sm-offset-2">
            <h2>Преимущества смарт-подушки goodnite </h2>
          </div>
        </div> 
      </div>
      <div class="text-center our-services">
        <div class="row equal" style="margin-top:20px; margin-bottom:0px;">
          <div class="col-lg-4 col-sm-6 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="300ms">
            <div class="service-icon">
              <i class="fas fa-bell-slash"></i>
            </div>
            <div class="service-info">
              <h3>Невмешательство в сон</h3>
              <p>Одной из важнейших особенностей и главным преимуществом подушки goodnite является то, что она не мешает вам спать! 
			  Она не будет пробуждать вас ударами тока, звуками или вибрациями, заставляя сменить позу. Подушка goodnite заботится о качестве вашего сна, тихо и незаметно делая свою работу. 
			  Ваш ночной сон и отдых – это самое главное!.</p>
            </div>
          </div>
          <div class="col-lg-4 col-sm-6 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="450ms">
            <div class="service-icon">
              <i class="fas fa-cloud"></i>
            </div>
            <div class="service-info">
              <h3>Неинвазивность</h3>
              <p>Несомненный плюс goodnite – это то, что устройство снижает и предотвращает храп щадящим для человека способом. 
				goodnite не оказывает воздействия на кожу, решая проблему храпа без помощи медицинских инструментов и операций.</p>
            </div>
          </div>
          <div class="col-lg-4 col-sm-6 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="550ms">
            <div class="service-icon">
              <i class="fas fa-chart-line"></i>
            </div>
            <div class="service-info">
              <h3>Высокие результаты</h3>
              <p>Клинические исследования, проведенные во время испытаний подушки, показали, что при использовании goodnite общий уровень храпа снижается минимум на 67%. 
			  Средние показатели снижения храпа по времени и громкости обычно варьируются от 80 до 90%. Такие показатели являются очень высоким результатом.</p>
            </div>
          </div>
          <div class="col-lg-4 col-sm-6 wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="650ms">
            <div class="service-icon">
              <i class="fas fa-procedures"></i>
            </div>
            <div class="service-info">
              <h3>Клинически доказанный эффект</h3>
              <p>goodnite прошла испытания в ряде университетов и клиник Европы. Ознакомиться с результатами испытаний вы можете на этой странице.</p>
            </div>
          </div>
          <div class="col-lg-4 col-sm-6 wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="750ms">
            <div class="service-icon">
			  <i class="fas fa-bed"></i>
            </div>
            <div class="service-info">
              <h3>Комфорт во время сна</h3>
              <p>goodnite – самое комфортное средство против храпа из всех, которые есть сегодня на рынке. Ничего лишнего и непривычного для вашего сна и отдыха! 
			  Вы просто используете goodnite как свою обычную подушку. </p>
            </div>
          </div>
          <div class="col-lg-4 col-sm-6 wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="850ms">
            <div class="service-icon">
              <i class="fas fa-umbrella"></i>
            </div>
            <div class="service-info">
              <h3>Отсутствие побочных эффектов</h3>
              <p>goodnite не оказывает на организм каких-либо вредных воздействий, а противопоказания к её использованию отсутствуют или минимальны.</p>
            </div>
          </div>
        </div>
        <div class="row" style="margin-top:20px; margin-bottom:0px;">
	        <div class="text-center col-sm-8 col-sm-offset-2 col-xs-10 col-xs-offset-1">
			  <a class="btn btn-primary btn-round-lg btn-lg" style="white-space:normal !important; word-wrap: break-word; word-break: normal;" href="#" data-toggle="modal" data-target="#exampleModalCenter">
				<i class="fas fa-shopping-cart fa-lg"></i> Купить смарт-подушку nitetronic goodnite за 12990 руб. для хорошего сна</a>
			</div>
		</div>
      </div>
   </div>
</section> <!-- advantage -->


  <section id="portfolio">
    <div class="container">
      <div class="row">
        <div class="heading text-center col-sm-8 col-sm-offset-2 wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="300ms">
          <h2>Подробнее о goodnite и ее использовании</h2>
          </div>
      </div> 
    </div>
    <div class="container-fluid">
       <div class="row">   <!-- row 1-->
        <div class="col-sm-3 col-xs-6">
          <div class="folio-item wow fadeInRightBig" data-wow-duration="1000ms" data-wow-delay="300ms">
            <div class="folio-image">
              <img class="img-responsive" src="<?php echo site_url();?><?php echo $views.root;?>/assets/images/portfolio/message-to.jpg" alt="">
            </div>
            <div class="overlay">
              <div class="overlay-content">
                <div class="overlay-text">
                  <div class="folio-info">
                    <h3>Обращение компании Nitetronic - </h3>
                    <p>разработчика подушки goodnite</p>
                  </div>
                  <div class="folio-overview">
                    <span class="folio-link"><a class="folio-read-more" href="#" data-single_url="message-nitetronic.html" ><i class="fas fa-link"></i></a></span>
                    <span class="folio-expand"><a href="<?php echo site_url();?><?php echo $views.root;?>/assets/images/portfolio/message-to-w.jpg" data-lightbox="portfolio"><i class="fas fa-search-plus"></i></a></span>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-sm-3 col-xs-6">
          <div class="folio-item wow fadeInLeftBig" data-wow-duration="1000ms" data-wow-delay="400ms">
            <div class="folio-image">
              <img class="img-responsive" src="<?php echo site_url();?><?php echo $views.root;?>/assets/images/portfolio/goodnite-start-toon.jpg" alt="">
            </div>
            <div class="overlay">
              <div class="overlay-content">
                <div class="overlay-text">
                  <div class="folio-info">
                    <h3>Быстрый старт с goodnite</h3>
                    <p>как попробовать подушку в работе</p>
                  </div>
                  <div class="folio-overview">
                    <span class="folio-link"><a class="folio-read-more" href="#" data-single_url="goodnite-quick-start.html" ><i class="fas fa-link"></i></a></span>
                    <span class="folio-expand"><a href="<?php echo site_url();?><?php echo $views.root;?>/assets/images/portfolio/goodnite-start-w.jpg" data-lightbox="portfolio"><i class="fas fa-search-plus"></i></a></span>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
		
        <div class="col-sm-3 col-xs-6">
          <div class="folio-item wow fadeInLeftBig" data-wow-duration="1000ms" data-wow-delay="400ms">
            <div class="folio-image">
              <img class="img-responsive" src="<?php echo site_url();?><?php echo $views.root;?>/assets/images/portfolio/nitelink2-title-toon.jpg" alt="">
            </div>
            <div class="overlay">
              <div class="overlay-content">
                <div class="overlay-text">
                  <div class="folio-info">
                    <h3>Nitelink2 - для смартфона</h3>
                    <p>статистика вашего сна и храпа</p>
                  </div>
                  <div class="folio-overview">
                    <span class="folio-link"><a class="folio-read-more" href="#" data-single_url="nitelink2-intro.html" ><i class="fas fa-link"></i></a></span>
                    <span class="folio-expand"><a href="<?php echo site_url();?><?php echo $views.root;?>/assets/images/portfolio/nitelink2-title-w.jpg" data-lightbox="portfolio"><i class="fas fa-search-plus"></i></a></span>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
		
        <div class="col-sm-3 col-xs-6">
          <div class="folio-item wow fadeInLeftBig" data-wow-duration="1000ms" data-wow-delay="400ms">
            <div class="folio-image">
              <img class="img-responsive" src="<?php echo site_url();?><?php echo $views.root;?>/assets/images/portfolio/torino-blue-man.jpg" alt="">
            </div>
            <div class="overlay">
              <div class="overlay-content">
                <div class="overlay-text">
                  <div class="folio-info">
                    <h3>Как действует подушка goodnite</h3>
                    <p>видео, объясняющее работу</p>
                  </div>
                  <div class="folio-overview">
                    <span class="folio-link"><a class="folio-read-more" href="#" data-single_url="blue-man.html" ><i class="fas fa-link"></i></a></span>
                    <span class="folio-expand"><a href="<?php echo site_url();?><?php echo $views.root;?>/assets/images/portfolio/torino-blue-man-w.jpg" data-lightbox="portfolio"><i class="fas fa-search-plus"></i></a></span>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
		
        <div class="col-sm-3 col-xs-6">
          <div class="folio-item wow fadeInLeftBig" data-wow-duration="1000ms" data-wow-delay="400ms">
            <div class="folio-image">
              <img class="img-responsive" src="<?php echo site_url();?><?php echo $views.root;?>/assets/images/portfolio/feel-the-difference.jpg" alt="">
            </div>
            <div class="overlay">
              <div class="overlay-content">
                <div class="overlay-text">
                  <div class="folio-info">
                    <h3>Удобство использования</h3>
                    <p>и уход за подушкой</p>
                  </div>
                  <div class="folio-overview">
                    <span class="folio-link"><a class="folio-read-more" href="#" data-single_url="use-care-goodnite.html" ><i class="fas fa-link"></i></a></span>
                    <span class="folio-expand"><a href="<?php echo site_url();?><?php echo $views.root;?>/assets/images/portfolio/feel-the-difference-w.jpg" data-lightbox="portfolio"><i class="fas fa-search-plus"></i></a></span>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
		
        <div class="col-sm-3 col-xs-6">
          <div class="folio-item wow fadeInRightBig" data-wow-duration="1000ms" data-wow-delay="300ms">
            <div class="folio-image">
              <img class="img-responsive" src="<?php echo site_url();?><?php echo $views.root;?>/assets/images/portfolio/compare-pencils.jpg" alt="">
            </div>
            <div class="overlay">
              <div class="overlay-content">
                <div class="overlay-text">
                  <div class="folio-info">
                    <h3>Сравнение с другими средствами от храпа</h3>
                  </div>
                  <div class="folio-overview">
                    <span class="folio-link"><a class="folio-read-more" href="#" data-single_url="comparing-other-snoring.html"><i class="fas fa-link"></i></a></span>
                    <span class="folio-expand"><a href="<?php echo site_url();?><?php echo $views.root;?>/assets/images/portfolio/compare-pencils-w.jpg" data-lightbox="portfolio"><i class="fas fa-search-plus"></i></a></span>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
				
        <div class="col-sm-3 col-xs-6">
          <div class="folio-item wow fadeInLeftBig" data-wow-duration="1000ms" data-wow-delay="400ms">
            <div class="folio-image">
              <img class="img-responsive" src="<?php echo site_url();?><?php echo $views.root;?>/assets/images/portfolio/pillow-box-unit-toon.jpg" alt="">
            </div>
            <div class="overlay">
              <div class="overlay-content">
                <div class="overlay-text">
                  <div class="folio-info">
                    <h3>Технические параметры устройства goodnite</h3>
                  </div>
                  <div class="folio-overview">
                    <span class="folio-link"><a class="folio-read-more" href="#" data-single_url="technical-info.html" ><i class="fas fa-link"></i></a></span>
                    <span class="folio-expand"><a href="<?php echo site_url();?><?php echo $views.root;?>/assets/images/portfolio/pillow-box-unit-toon-w.jpg" data-lightbox="portfolio"><i class="fas fa-search-plus"></i></a></span>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="col-sm-3 col-xs-6">
          <div class="folio-item wow fadeInLeftBig" data-wow-duration="1000ms" data-wow-delay="400ms">
            <div class="folio-image">
              <img class="img-responsive" src="<?php echo site_url();?><?php echo $views.root;?>/assets/images/portfolio/customer-review-toon.jpg" alt="">
            </div>
            <div class="overlay">
              <div class="overlay-content">
                <div class="overlay-text">
                  <div class="folio-info">
                    <h3>Отзывы покупателей</h3>
                  </div>
                  <div class="folio-overview">
                    <span class="folio-link"><a class="folio-read-more" href="#" data-single_url="customer-review.html" ><i class="fas fa-link"></i></a></span>
                    <span class="folio-expand"><a href="<?php echo site_url();?><?php echo $views.root;?>/assets/images/portfolio/customer-review-toon-w.jpg" data-lightbox="portfolio"><i class="fas fa-search-plus"></i></a></span>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
		
		</div>  <!-- row 1-->

	  
    </div>
    <div id="portfolio-single-wrap">
      <div id="portfolio-single">
      </div>
    </div><!-- /#portfolio-single-wrap -->
	
  </section><!--/#portfolio-->

  <section id="purchase">
  
    <div class="container">
	
	<div class="row">
	      <div class="col-sm-6 wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="600ms">
			<span class="pull-right"><img class="img-responsive" src="assets/images/main-purchase.jpg" alt=""></span>
           </div>
 	      <div class="col-sm-6 wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="600ms">
			<h2>Обновленная смарт-подушка от храпа goodnite™ по специальной цене</h2>
			<h2><span style="text-decoration:line-through;">16240 руб.</span>  <span>12990 руб.</span></h2>
			<div align="center">
			<a class="btn btn-primary btn-round-lg btn-lg" style="white-space:normal !important; word-wrap: break-word; word-break: normal;" href="#" data-toggle="modal" data-target="#exampleModalCenter">
				<i class="fas fa-shopping-cart fa-lg"></i> Заказать goodnite</a>
			</div>
			
			<ul>
			<li>Более удобная для сна</li>
			<li>Улучшенный алгоритм для точного определения храпа</li>
			<li>Расширенный анализ в приложении Nitelink2 для смартфона</li>
			<li>Точное определение храпа при различных положениях головы</li>
			<li>Неинвазивная, Без рецепта, Без сторонних эффектов</li>
			<li>Подключается к смартфону</li>
			</ul>
          </div>
		</div>
    </div>



	<!-- Modal -->
	<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
		<div class="modal-dialog modal-dialog-centered" role="document">
			<div class="modal-content">
				<form id="purchase-form" name="purchase-form" method="post" action="/orderbymail.php">
				<div class="modal-header">
					<h3 class="modal-title" id="exampleModalLongTitle">Заказать смарт-подушку goodnite</h3>
					<button type="button" class="close" id="purchase_close" data-dismiss="modal" aria-label="Закрыть">
					<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body">
					<div class="form-group">
						<input type="text" name="name" class="form-control" placeholder="Имя" required="required"  />
						<input type="email" name="email" class="form-control" placeholder="Email Адрес" required="required" />
						<input type="tel" id="phone" name="phone" class="form-control" placeholder="Телефон" pattern="(\+?\d[- .]*){7,13}" title="Международный, федеральный или местный телефонный номер" 
						required="required" />
						<span class="validity"></span>
						<textarea name="message" id="message" class="form-control" rows="4" placeholder="Комментарий к заказу"></textarea>
					</div>                        
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-secondary" data-dismiss="modal">Закрыть</button>
					<button type="submit" class="btn btn-submit">Отправить заказ</button>
					<h4>Или позвоните по телефону 8(812) 123-00-00 для заказа.</h4>
					<div class="form_purchase_status"></div>
				</div>
				</form> 
			</div>
		</div>
	</div>
  
  </section><!--/#purchase-->
  
  <section id="twitter" class="parallax">
    <div>
      <a class="twitter-left-control" href="#twitter-carousel" role="button" data-slide="prev"><i class="fas fa-angle-left"></i></a>
      <a class="twitter-right-control" href="#twitter-carousel" role="button" data-slide="next"><i class="fas fa-angle-right"></i></a>
      <div class="container">
        <div class="row">
          <div class="col-sm-8 col-sm-offset-2">
            <div class="twitter-icon text-center">
              <i class="fab fa-twitter"></i>
              <h4>Наш канал в Twitter @MYGOODNITE</h4>
            </div>
            <div id="twitter-carousel" class="carousel slide" data-ride="carousel">
              <div class="carousel-inner">
                <div class="item active wow fadeIn" data-wow-duration="1000ms" data-wow-delay="300ms">
                  <p>Презентация MYGOODNITE обновленной smart-системы nitronic goodnite и мобильного приложения Nitelink2 <a href="#"><span>#MYGOODNITE #храп #стопхрап #goodnite</span> http://bit.ly/1qlgwav</a></p>
                </div>
                <div class="item">
                  <p>Презентация MYGOODNITE обновленной smart-системы nitronic goodnite и мобильного приложения Nitelink2 <a href="#"><span>#MYGOODNITE #храп #стопхрап #goodnite</span> http://bit.ly/1qlgwav</a></p>
                </div>
                <div class="item">                                
                  <p>Презентация MYGOODNITE обновленной smart-системы nitronic goodnite и мобильного приложения Nitelink2 <a href="#"><span>#MYGOODNITE #храп #стопхрап #goodnite</span> http://bit.ly/1qlgwav</a></p>
                </div>
              </div>                        
            </div>                    
          </div>
        </div>
      </div>
    </div>
  </section><!--/#twitter-->

  <section id="blog">
    <div class="container">
      <div class="row">
        <div class="heading text-center col-sm-8 col-sm-offset-2 wow fadeInUp" data-wow-duration="1200ms" data-wow-delay="300ms">
          <h2>Блог компании</h2>
          <p>Документы, статьи, обсуждения, новинки и разработки из области сомнологии</p>
        </div>
      </div>
      <div class="blog-posts">
        <div class="row">
          <div class="col-sm-4 wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="400ms">
            <div class="post-thumb">
              <a href="#"><img class="img-responsive" src="<?php echo site_url();?><?php echo $views.root;?>/assets/images/blog/blog-openning-picture.jpg" alt=""></a> 
              <div class="post-meta">
                <span><i class="fas fa-comments-o"></i> 3 Comments</span>
                <span><i class="fas fa-heart"></i> 0 Likes</span> 
              </div>
              <div class="post-icon">
                <i class="fas fa-pencil-alt"></i>
              </div>
            </div>
            <div class="entry-header">
              <h3><a href="#">Авторизованный дилер</a></h3>
              <span class="date">Nov 26, 2017</span>
              <span class="cetagory">в <strong>Статьи</strong></span>
            </div>
            <div class="entry-content">
              <p>Мы являемся авторизованным дистрибьютором и дилером компании Nitetronic. Между нами заключено Дистрибьюторское соглашение, которое является основанием для ведения деятельности на территории России и
стран СНГ...</p>
            </div>
          </div>
          <div class="col-sm-4 wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="600ms">
            <div class="post-thumb">
              <div id="post-carousel"  class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                  <li data-target="#post-carousel" data-slide-to="0" class="active"></li>
                  <li data-target="#post-carousel" data-slide-to="1"></li>
                  <li data-target="#post-carousel" data-slide-to="2"></li>
                </ol>
                <div class="carousel-inner">
                  <div class="item active">
                    <a href="#"><img class="img-responsive" src="<?php echo site_url();?><?php echo $views.root;?>/assets/images/blog/nitetronic2-1.jpg" alt=""></a>
                  </div>
                  <div class="item">
                    <a href="#"><img class="img-responsive" src="<?php echo site_url();?><?php echo $views.root;?>/assets/images/blog/nitetronic3-2.jpg" alt=""></a>
                  </div>
                  <div class="item">
                    <a href="#"><img class="img-responsive" src="<?php echo site_url();?><?php echo $views.root;?>/assets/images/blog/nitetronic6.jpg" alt=""></a>
                  </div>
                </div>                               
                <a class="blog-left-control" href="#post-carousel" role="button" data-slide="prev"><i class="fas fa-angle-left"></i></a>
                <a class="blog-right-control" href="#post-carousel" role="button" data-slide="next"><i class="fas fa-angle-right"></i></a>
              </div>                            
              <div class="post-meta">
                <span><i class="fas fa-comments-o"></i> 3 Comments</span>
                <span><i class="fas fa-heart"></i> 0 Likes</span> 
              </div>
              <div class="post-icon">
                <i class="fas fa-image"></i>
              </div>
            </div>
            <div class="entry-header">
              <h3><a href="#">Авторизованный дилер</a></h3>
              <span class="date">Nov 30, 2017</span>
              <span class="cetagory">в <strong>Статьи</strong></span>
            </div>
            <div class="entry-content">
              <p>Мы являемся авторизованным дистрибьютором и дилером компании Nitetronic. Между нами заключено Дистрибьюторское соглашение, которое является основанием для ведения деятельности на территории России и
стран СНГ.</p>
            </div>
          </div>
          <div class="col-sm-4 wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="800ms">
            <div class="post-thumb">
              <a href="#"><img class="img-responsive" src="<?php echo site_url();?><?php echo $views.root;?>/assets/images/blog/goodnite_bed_500.jpg" alt=""></a>
              <div class="post-meta">
                <span><i class="fas fa-comments-o"></i> 3 Comments</span>
                <span><i class="fas fa-heart"></i> 0 Likes</span> 
              </div>
              <div class="post-icon">
                <i class="fas fa-video"></i>
              </div>
            </div>
            <div class="entry-header">
              <h3><a href="#">Авторизованный дилер</a></h3>
              <span class="date">Dec 01, 2017</span>
              <span class="cetagory">в <strong>Статьи</strong></span>
            </div>
            <div class="entry-content">
              <p>Мы являемся авторизованным дистрибьютором и дилером компании Nitetronic. Между нами заключено Дистрибьюторское соглашение, которое является основанием для ведения деятельности на территории России и
стран СНГ. </p>
            </div>
          </div>                    
        </div>
        <div class="load-more wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="500ms">
          <a href="#" class="btn-loadmore"><i class="fas fa-repeat"></i> Загрузить еще</a>
        </div>                
      </div>
    </div>
  </section><!--/#blog-->

  <section id="contact">
    <div id="contact-us" class="parallax">
      <div class="container">
        <div class="row"> 
          <div class="heading text-justify col-sm-8 col-sm-offset-2 wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="300ms">
            <h2>Связаться с нами</h2>
            <p>Мы ответственно относимся к вопросу конфиденциальности сведений, полученных в связи с Вашим обращением.
Мы гарантируем, что любые данные, полученные от Вас, не будут разглашены или использованы в иных целях, кроме как для работы в ходе нашего совместного проекта.
Исключением могут являться случаи, когда Вы даете специальное разрешение на это, или это требуется для проведения судебного или иного государственного расследования.</p>
          </div>
        </div>
        <div class="contact-form wow fadeIn" data-wow-duration="1000ms" data-wow-delay="600ms">
          <div class="row">
            <div class="col-sm-6">
              <form id="main-contact-form" name="contact-form" method="post" action="/sendemail.php">
                <div class="row  wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="300ms">
                  <div class="col-sm-6">
                    <div class="form-group">
                      <input type="text" name="name" class="form-control" placeholder="Имя" required="required">
                    </div>
                  </div>
                  <div class="col-sm-6">
                    <div class="form-group">
                      <input type="email" name="email" class="form-control" placeholder="Email Адрес" required="required">
                    </div>
                  </div>
                </div>
                <div class="form-group">
                  <input type="text" name="subject" class="form-control" placeholder="Тема" required="required">
                </div>
                <div class="form-group">
                  <textarea name="message" id="message1" class="form-control" rows="4" placeholder="Напишите сообщение" required="required"></textarea>
                </div>                        
                <div class="form-group">
                  <button type="submit" class="btn btn-submit">Отправить</button>
                </div>
              </form>   
            </div>
            <div class="col-sm-6">
              <div class="contact-info wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="300ms">
                <p>Напишите сообщение или заказ на подушку goodnite.</p>
                <ul class="address">
                  <li><i class="fas fa-map-marker"></i> <span> Адрес:</span> 195273, Россия, Санкт-Петербург, Пискаревский пр. 63, лит. А</li>
                  <li><i class="fas fa-phone"></i> <span> Телефон:</span> +7 812 123 45 00 </li>
                  <li><i class="fas fa-envelope"></i> <span> Email:</span><a href="mailto:info@mygoodnite.ru"> info@mygoodnite.ru</a></li>
                  <li><i class="fas fa-globe"></i> <span> Website:</span> <a href="http://www.mygoodnite.ru"> www.mygoodnite.ru</a></li>
                </ul>
              </div>                            
            </div>
          </div>
        </div>
      </div>
    </div>        
  </section><!--/#contact-->
  <footer id="footer">
    <div class="footer-top wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="300ms">
      <div class="container">
        <div class="row"> 
          <div class="col-sm-3 col-lg-4">
				<div class="footer-logo">
					<img class="img-responsive" src="<?php echo site_url();?><?php echo $views.root;?>/assets/images/goodnite-logo-dark-140.png" style="border-radius: 5px;" alt="logo">				
				</div>
		  </div>
          <div class="col-sm-6 col-lg-4">
				<div class="footer-logo">
					<a href="index.html"><img class="img-responsive" src="<?php echo site_url();?><?php echo $views.root;?>/assets/images/nitetronic-LOGO_header_transparent.png" alt="" style="margin: auto;"></a>
				</div>
		  </div>
          <div class="col-sm-3 col-lg-4">
				<div class="footer-logo">
				<img class="img-responsive" src="<?php echo site_url();?><?php echo $views.root;?>/assets/images/german-border.png" alt="" style="margin: auto;">
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
            <p>&copy; 2018 Goodnite. Smart-подушка от храпа.</p>
          </div>
          <div class="col-sm-6">
            <p class="pull-right">Разработка <a href="http://mygoodnite.ru">#GOODNITE</a></p>
          </div>
        </div>
      </div>
    </div>
  </footer>

  <script type="text/javascript" src="assets/js/jquery.js"></script>
  <script type="text/javascript" src="assets/js/bootstrap.min.js"></script>
  <!-- script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=true"></script -->
  <script type="text/javascript" src="assets/js/jquery.inview.min.js"></script>
  <script type="text/javascript" src="assets/js/jquery.bcSwipe.min.js"></script>   <!-- touch support for bs.carousel -->
  <script type="text/javascript" src="assets/js/wow.min.js"></script>
  <script type="text/javascript" src="assets/js/mousescroll.js"></script>
  <script type="text/javascript" src="assets/js/smoothscroll.js"></script>
  <script type="text/javascript" src="assets/js/jquery.countTo.js"></script>
  <script type="text/javascript" src="assets/js/lightbox.min.js"></script>
  <script type="text/javascript" src="assets/js/main.js"></script>
  
    <?php if (analytics()): ?><?php echo analytics() ?><?php endif; ?>

</body>
</html>