<!DOCTYPE html>
<html lang="ru">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="Умная подушка от храпа nitetronic goodnite, единственная клинически апробованная smart-подушка, определяет положение головы и поворачивает ее. Разработано в Германии">
  <meta name="author" content="MYGOODNITE">
  <title>Умная подушка от храпа goodnite</title>
  <link rel="canonical" href="<?php echo $canonical; ?>" />
  <link href="<?php echo site_url();?>themes/my/assets/css/bootstrap.min.css" rel="stylesheet">
  <link href="<?php echo site_url();?>themes/my/assets/css/animate.min.css" rel="stylesheet"> 
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">  
  <link href="<?php echo site_url();?>themes/my/assets/css/lightbox.css" rel="stylesheet">
  <link href="<?php echo site_url();?>themes/my/assets/css/main.css" rel="stylesheet">
  <link href="<?php echo site_url();?>themes/my/assets/css/blog.css" rel="stylesheet">
  <link id="css-preset" href="<?php echo site_url();?>themes/my/assets/css/presets/preset7.css" rel="stylesheet">
  <link href="<?php echo site_url();?>themes/my/assets/css/responsive.css" rel="stylesheet">

  <link href='//fonts.googleapis.com/css?family=Open+Sans:300,400,600,700' rel='stylesheet' type='text/css'>
  <link rel="shortcut icon" href="<?php echo site_url();?>themes/my/assets/images/favicon.ico">
  <link rel="apple-touch-icon" sizes="120x120" href="<?php echo site_url();?>themes/my/assets/images/apple-touch-icon.png">
  <link rel="icon" type="image/png" sizes="32x32" href="<?php echo site_url();?>themes/my/assets/images/favicon-32x32.png">
  <link rel="icon" type="image/png" sizes="16x16" href="<?php echo site_url();?>themes/my/assets/images/favicon-16x16.png">
  <link rel="manifest" href="/site.webmanifest">
  <link rel="mask-icon" href="<?php echo site_url();?>themes/my/assets/images/safari-pinned-tab.svg" color="#5bbad5">
  <meta name="msapplication-TileColor" content="#da532c">
  <meta name="theme-color" content="#ffffff">  
  <script src="https://www.google.com/recaptcha/api.js" async defer></script>  

    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
  
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
								<li><a href="#"><i class="fas fa-phone"></i> <?php echo config('site.phone');?></a></li>
								<li><a href="#contact"><i class="fas fa-envelope" data-toggle="tooltip" title="Заполнить контактную форму"></i> info@mygoodnite.ru</a></li>
							</ul>
						</div>
					</div>
					<div class="col-sm-4">
						<div class="top-social-icons pull-right">
							<ul class="nav  navbar-nav">
								<li><a href=<?php echo config('social.facebook') ?> data-toggle="tooltip" title="Goodnite Facebook: @nitetronic.goodnite"><i class="fab fa-facebook"></i></a></li>
								<li><a href=<?php echo config('social.twitter') ?> data-toggle="tooltip" title="Goodnite Twitter: @GOODNITERU"><i class="fab fa-twitter"></i></a></li>
								<li><a href=<?php echo config('social.vk') ?> data-toggle="tooltip" title="Goodnite ВКонтакте: vk.com/public174639310"><i class="fab fa-vk"></i></a></li>
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
            <h1 class="animated fadeInLeftBig" data-animation-wipe="animated fadeOutLeftBig">Сейчас, приобретите <span>Smart-подушку goodnite</span> со скидкой 20% <strong>за <?php echo config('site.pillow.price');?> рублей</strong></h1>
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
          <ul class="nav navbar-nav navbar-right">                 
            <li class="scroll active"><a href="#home"><i class="fas fa-home fa-lg"></i></a></li>
			<li class="dropdown">
				<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">О храпе <span class="caret"></span></a>
				<ul class="dropdown-menu">
					<li><a href="/category/news">Сонные новости</a></li>
					<li><a href="/snoring">Что такое храп</a></li>
					<li><a href="/clinical-study">Клинические исследования</a></li>
					<li><a href="/community">Сообщество профессионалов</a></li>
					<li><a href="/blog">Блог</a></li>
				</ul>
			</li>			
            <li class="scroll"><a href="#services">Преимущества</a></li> 
            <li><a href="/faq">Частые Вопросы</a></li>
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
			
			<img class="img-responsive" src="<?php echo site_url();?>themes/my/assets/images/goodnite-anti-snore.jpg" style="opacity: 0.75;" alt="Спите без храпа с подушкой nitetronic goodnite">
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
			<img class="img-responsive" src="<?php echo site_url();?>themes/my/assets/images/nitetronic2.jpg" alt="Комплектация подушки против храпа">
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
			<img class="img-responsive" src="<?php echo site_url();?>themes/my/assets/images/Optimized-Nitetronic_Tech_Drawing_with_Rus_Labels_654.jpg" alt="Сон без храпа с умной подушкой">
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
				<i class="fas fa-shopping-cart fa-lg"></i> Купить смарт-подушку nitetronic goodnite за  <?php echo config('site.pillow.price');?> руб. для хорошего сна</a>
			</div>
		</div>
      </div>
   </div>
</section> <!-- advantage -->


  <section id="announce">
    <div class="container">
      <div class="heading wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="300ms">
        <div class="row">
          <div class="text-center col-sm-8 col-sm-offset-2">
            <h2>Новинка! Вариант исполнения - Анти-храп устройство под подушку PAD </h2>
          </div>
        </div> 
      </div>
      <div class="text-center our-services">
        <div class="row">
          <div class="col-sm-8 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="300ms">
            <div class="service-info">
			  <h3>Превращает Вашу подушку в подушку против храпа Goodnite</h3>
              <p>Активное устройство против храпа PAD подкладывается под Вашу подушку и имеет практически такую же функциональность, как и смарт-подушка Goodnite.
			  Используется аналогичный механизм определения храпа и надувания камер активного вкладыша, но без интеграции в подушку. <a href="/pad-anti-snore">Подробнее об устройстве против храпа PAD</a>
			  </p>
            </div>
          </div>
          <div class="col-sm-4 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="450ms">
            <div class="service-info">
			<img class="img-responsive" src="<?php echo site_url();?>themes/my/assets/images/anti-snore-pad-pack.jpg" alt="PAD-устройство против храпа под подушку">
            </div>
          </div>
        </div>
      </div>
   </div>
</section> <!-- announce -->


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
              <img class="img-responsive" src="<?php echo site_url();?>themes/my/assets/images/portfolio/message-to.jpg" alt="К нашим покупателям">
            </div>
            <div class="overlay">
              <div class="overlay-content">
                <div class="overlay-text">
                  <div class="folio-info">
                    <h3>Обращение компании Nitetronic - </h3>
                    <p>разработчика подушки goodnite</p>
                  </div>
                  <div class="folio-overview">
                    <span class="folio-link"><a class="folio-read-more" href="/message-nitetronic.html" data-single_url="message-nitetronic.html" ><i class="fas fa-link"></i></a></span>
                    <span class="folio-expand"><a href="<?php echo site_url();?>themes/my/assets/images/portfolio/message-to-w.jpg" data-lightbox="portfolio"><i class="fas fa-search-plus"></i></a></span>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-sm-3 col-xs-6">
          <div class="folio-item wow fadeInLeftBig" data-wow-duration="1000ms" data-wow-delay="400ms">
            <div class="folio-image">
              <img class="img-responsive" src="<?php echo site_url();?>themes/my/assets/images/portfolio/goodnite-start-toon.jpg" alt="Первый запуск подушки">
            </div>
            <div class="overlay">
              <div class="overlay-content">
                <div class="overlay-text">
                  <div class="folio-info">
                    <h3>Быстрый старт с goodnite</h3>
                    <p>как попробовать подушку в работе</p>
                  </div>
                  <div class="folio-overview">
                    <span class="folio-link"><a class="folio-read-more" href="/goodnite-quick-start.html" data-single_url="goodnite-quick-start.html" ><i class="fas fa-link"></i></a></span>
                    <span class="folio-expand"><a href="<?php echo site_url();?>themes/my/assets/images/portfolio/goodnite-start-w.jpg" data-lightbox="portfolio"><i class="fas fa-search-plus"></i></a></span>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
		
        <div class="col-sm-3 col-xs-6">
          <div class="folio-item wow fadeInLeftBig" data-wow-duration="1000ms" data-wow-delay="400ms">
            <div class="folio-image">
              <img class="img-responsive" src="<?php echo site_url();?>themes/my/assets/images/portfolio/nitelink2-title-toon.jpg" alt="Приложение для телефона">
            </div>
            <div class="overlay">
              <div class="overlay-content">
                <div class="overlay-text">
                  <div class="folio-info">
                    <h3>Nitelink2 - для смартфона</h3>
                    <p>статистика вашего сна и храпа</p>
                  </div>
                  <div class="folio-overview">
                    <span class="folio-link"><a class="folio-read-more" href="/nitelink2-intro.html" data-single_url="nitelink2-intro.html" ><i class="fas fa-link"></i></a></span>
                    <span class="folio-expand"><a href="<?php echo site_url();?>themes/my/assets/images/portfolio/nitelink2-title-w.jpg" data-lightbox="portfolio"><i class="fas fa-search-plus"></i></a></span>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
		
        <div class="col-sm-3 col-xs-6">
          <div class="folio-item wow fadeInLeftBig" data-wow-duration="1000ms" data-wow-delay="400ms">
            <div class="folio-image">
              <img class="img-responsive" src="<?php echo site_url();?>themes/my/assets/images/portfolio/torino-blue-man.jpg" alt="Принцип работы">
            </div>
            <div class="overlay">
              <div class="overlay-content">
                <div class="overlay-text">
                  <div class="folio-info">
                    <h3>Как действует подушка goodnite</h3>
                    <p>видео, объясняющее работу</p>
                  </div>
                  <div class="folio-overview">
                    <span class="folio-link"><a class="folio-read-more" href="/blue-man.html" data-single_url="blue-man.html" ><i class="fas fa-link"></i></a></span>
                    <span class="folio-expand"><a href="<?php echo site_url();?>themes/my/assets/images/portfolio/torino-blue-man-w.jpg" data-lightbox="portfolio"><i class="fas fa-search-plus"></i></a></span>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
		
        <div class="col-sm-3 col-xs-6">
          <div class="folio-item wow fadeInLeftBig" data-wow-duration="1000ms" data-wow-delay="400ms">
            <div class="folio-image">
              <img class="img-responsive" src="<?php echo site_url();?>themes/my/assets/images/portfolio/feel-the-difference.jpg" alt="Уход и использование">
            </div>
            <div class="overlay">
              <div class="overlay-content">
                <div class="overlay-text">
                  <div class="folio-info">
                    <h3>Удобство использования</h3>
                    <p>и уход за подушкой</p>
                  </div>
                  <div class="folio-overview">
                    <span class="folio-link"><a class="folio-read-more" href="/use-care-goodnite.html" data-single_url="use-care-goodnite.html" ><i class="fas fa-link"></i></a></span>
                    <span class="folio-expand"><a href="<?php echo site_url();?>themes/my/assets/images/portfolio/feel-the-difference-w.jpg" data-lightbox="portfolio"><i class="fas fa-search-plus"></i></a></span>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
		
        <div class="col-sm-3 col-xs-6">
          <div class="folio-item wow fadeInRightBig" data-wow-duration="1000ms" data-wow-delay="300ms">
            <div class="folio-image">
              <img class="img-responsive" src="<?php echo site_url();?>themes/my/assets/images/portfolio/compare-pencils.jpg" alt="Сравнение средств от храпа">
            </div>
            <div class="overlay">
              <div class="overlay-content">
                <div class="overlay-text">
                  <div class="folio-info">
                    <h3>Сравнение с другими средствами от храпа</h3>
                  </div>
                  <div class="folio-overview">
                    <span class="folio-link"><a class="folio-read-more" href="/comparing-other-snoring.html" data-single_url="comparing-other-snoring.html"><i class="fas fa-link"></i></a></span>
                    <span class="folio-expand"><a href="<?php echo site_url();?>themes/my/assets/images/portfolio/compare-pencils-w.jpg" data-lightbox="portfolio"><i class="fas fa-search-plus"></i></a></span>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
				
        <div class="col-sm-3 col-xs-6">
          <div class="folio-item wow fadeInLeftBig" data-wow-duration="1000ms" data-wow-delay="400ms">
            <div class="folio-image">
              <img class="img-responsive" src="<?php echo site_url();?>themes/my/assets/images/portfolio/pillow-box-unit-toon.jpg" alt="Технические данные">
            </div>
            <div class="overlay">
              <div class="overlay-content">
                <div class="overlay-text">
                  <div class="folio-info">
                    <h3>Технические параметры устройства goodnite</h3>
                  </div>
                  <div class="folio-overview">
                    <span class="folio-link"><a class="folio-read-more" href="/technical-info.html" data-single_url="technical-info.html" ><i class="fas fa-link"></i></a></span>
                    <span class="folio-expand"><a href="<?php echo site_url();?>themes/my/assets/images/portfolio/pillow-box-unit-toon-w.jpg" data-lightbox="portfolio"><i class="fas fa-search-plus"></i></a></span>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="col-sm-3 col-xs-6">
          <div class="folio-item wow fadeInLeftBig" data-wow-duration="1000ms" data-wow-delay="400ms">
            <div class="folio-image">
              <img class="img-responsive" src="<?php echo site_url();?>themes/my/assets/images/portfolio/customer-review-toon.jpg" alt="Отзывы покупателей">
            </div>
            <div class="overlay">
              <div class="overlay-content">
                <div class="overlay-text">
                  <div class="folio-info">
                    <h3>Отзывы покупателей</h3>
                  </div>
                  <div class="folio-overview">
                    <span class="folio-link"><a class="folio-read-more" href="/customer-review.html" data-single_url="customer-review.html" ><i class="fas fa-link"></i></a></span>
                    <span class="folio-expand"><a href="<?php echo site_url();?>themes/my/assets/images/portfolio/customer-review-toon-w.jpg" data-lightbox="portfolio"><i class="fas fa-search-plus"></i></a></span>
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
	
		<div itemscope itemtype="http://schema.org/Product" class="row">
	      <div class="col-sm-6 wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="600ms">
			<span class="pull-right"><img class="img-responsive" itemprop="image" src="<?php echo site_url();?>themes/my/assets/images/main-purchase.jpg" alt="купить подушку от храпа goodnite"></span>
           </div>
 	      <div class="col-sm-6 wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="600ms">
			<h2 itemprop="name">Обновленная смарт-подушка от храпа goodnite™ по специальной цене</h2>
			<meta itemprop="brand" content="Nitetronic goodnite">
			<div itemprop="offers" itemscope itemtype="http://schema.org/Offer">
				<h2><span style="text-decoration:line-through;"><?php echo config('site.pillow.oldprice');?> руб.</span>  <span><?php echo config('site.pillow.price');?> руб.</span></h2>
				<meta itemprop="price" content="<?php echo config('site.pillow.price');?>">
				<meta itemprop="priceCurrency" content="RUB">
				<meta itemprop="availability" content="PreOrder" />
			</div>	
			<div align="center">
			<a class="btn btn-primary btn-round-lg btn-lg" style="white-space:normal !important; word-wrap: break-word; word-break: normal;" href="#" data-toggle="modal" data-target="#exampleModalCenter">
				<i class="fas fa-shopping-cart fa-lg"></i> Заказать goodnite</a>
			</div>
			
			<ul itemprop="description">
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
            <div class="g-recaptcha" data-sitekey="6Lff-7QUAAAAAIUPwCbMD7lmFiFm8E7_3Km6Lng8"></div>                                           
					</div>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-secondary" data-dismiss="modal">Закрыть</button>
					<button type="submit" class="btn btn-submit">Отправить заказ</button>
					<h4>Или позвоните по телефону <?php echo config('site.phone');?> для заказа.</h4>
					<span><a href="#contact">Подробнее об использовании персональных данных</a></span>
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
          <div class="col-sm-10 col-sm-offset-1">
            <div class="twitter-icon text-center">
              <i class="fab fa-twitter"></i>
              <h4>Наш канал в Twitter <a href="https://twitter.com/goodniteru">@goodniteru</a></h4>
            </div>
            <div id="twitter-carousel" class="carousel slide" data-ride="carousel">
              <div class="carousel-inner">
                <div class="item active wow fadeIn" data-wow-duration="1000ms" data-wow-delay="300ms">
                  <p>Сравнение устройств от храпа. Что такое храп? Это низкие и вибрирующие звуки, которые издают некоторые люди во время сна из-за расслабления мягкого нёба и язычка... <a href="https://twitter.com/goodniteru/status/1069904474490179584"><span>#MYGOODNITE #храп #стопхрап #goodnite</span></a></p>
                </div>
                <div class="item">
                  <p>#Храп и #семейные отношения. Рассмотрим одну из частых ситуаций, в которой один из супругов страдает храпом... <a href="https://twitter.com/goodniteru/status/1068573320206065664"><span>#MYGOODNITE #храп #семейныеотношения</span></a></p>
                </div>
                <div class="item">                                
                  <p>Презентация MYGOODNITE обновленной smart-системы nitronic goodnite и мобильного приложения Nitelink2 <a href="https://twitter.com/goodniteru/status/1069541145422766080"><span>#ПодушкаОтХрапа #храп #Nitelink #goodnite</span></a></p>
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
		<?php $lists = recent_posts(true, 3);?>
		<?php foreach ($lists as $l):?>
			<div class="col-sm-4 wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="400ms">
				<div class="post-thumb">
					<a href="<?php echo $l->url;?>"><img class="img-responsive" src="<?php echo get_image($l);?>" alt="<?php echo shorten($l->title,80);?>"></a> 
					<div class="post-meta">
						<span><i class="fas fa-eye"></i> Просмотров <?php echo $l->views;?> </span>
						<span><i class="fas fa-comments-o"></i> Комментариев 0 </span> 
					</div>
					<div class="post-icon">
					<?php if (!empty($l->video)) { ?>
						<i class="fas fa-video"></i>
					<?php } else { ?>	
						<i class="fas fa-pencil-alt"></i>
					<?php } ?>
					</div>
				</div>
				<div class="entry-header">
					<h3><a href="<?php echo $l->url;?>"><?php echo shorten($l->title,120);?></a></h3>
					<span class="date"><?php echo date('d M Y', $l->date);?></span>
					<span class="cetagory">в <strong><?php echo $l->category;?></strong></span>
				</div>
				<div class="entry-content">
					<p><?php echo shorten($l->body, 200); ?>...</p>
				</div>
			</div>
		<?php endforeach;?>
        </div>
        <div class="load-more wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="500ms">
          <a href="/blog" class="btn-loadmore"><i class="fas fa-repeat"></i> Перейти в блог</a>
        </div>                
      </div>
    </div>
  </section><!--/#blog-->
		
  <section id="dynamic">

      <?php echo content();?>
  </section>

  
  <section id="contact">
    <div id="contact-us" class="parallax">
      <div class="container">
        <div class="row"> 
          <div class="heading text-justify col-sm-8 col-sm-offset-2 wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="300ms">
            <h2>Связаться с нами</h2>
            <p>Мы ответственно относимся к вопросу конфиденциальности сведений, полученных в связи с Вашим обращением.
			<span><a href="/personal">Подробнее об использовании персональных данных</a></span>
			</p>
          </div>
		  <div class="form_status"> </div>
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
                  <input id="subject1" type="text" name="subject" class="form-control" placeholder="Тема" required="required">
                </div>
                <div class="form-group">
                  <textarea name="message" id="message1" class="form-control" rows="4" placeholder="Напишите сообщение" required="required"></textarea>
                </div> 
                <div class="g-recaptcha" data-sitekey="6Lff-7QUAAAAAIUPwCbMD7lmFiFm8E7_3Km6Lng8"></div>                       
                <div class="form-group">
                  <button type="submit" class="btn btn-submit">Отправить</button>
                </div>
                <div class="form-group">
                  <span>Нажимая кнопку «Отправить», я даю свое согласие на обработку моих персональных данных, в соответствии с Федеральным законом от 27.07.2006 года №152-ФЗ «О персональных данных», 
				  на условиях и для целей, определенных в Согласии на обработку персональных данных</span>
                </div>
              </form>   
            </div>
            <div class="col-sm-6">
              <div class="contact-info wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="300ms">
                <p>Напишите сообщение или заказ на подушку goodnite.</p>
                <ul class="address">
                  <li><i class="fas fa-map-marker"></i> <span> Адрес:</span> 195273, Россия, Санкт-Петербург, Пискаревский пр. 63, лит. А</li>
                  <li><i class="fas fa-phone"></i> <span> Телефон:</span> <?php echo config('site.phone');?> </li>
                  <li><i class="fas fa-envelope"></i> <span> Email:</span><a href="mailto:info@mygoodnite.ru"> info@mygoodnite.ru</a></li>
                  <li><i class="fas fa-globe"></i> <span> Website:</span> <a href="https://www.mygoodnite.ru"> www.mygoodnite.ru</a></li>
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
					<img class="img-responsive" src="<?php echo site_url();?>themes/my/assets/images/goodnite-logo-dark-140.png" style="border-radius: 5px;" alt="logo">				
				</div>
		  </div>
          <div class="col-sm-6 col-lg-4">
				<div class="footer-logo">
					<a href="/"><img class="img-responsive" src="<?php echo site_url();?>themes/my/assets/images/nitetronic-LOGO_header_transparent.png" alt="nitetronic logo" style="margin: auto;"></a>
				</div>
		  </div>
          <div class="col-sm-3 col-lg-4">
				<div class="footer-logo">
				<img class="img-responsive" src="<?php echo site_url();?>themes/my/assets/images/german-border.png" alt="Разработано в Германии" style="margin: auto;">
				<div class="centered">Разработано в Германии</div>
				</div>
		  </div>
  	    </div>
        <div class="row"> 
          <div class="col-sm-6 col-sm-offset-3 col-lg-4 col-lg-offset-4">
		  
			<div class="social-icons">
			<ul>
				<li><a class="envelope" href="mailto:info@mygoodnite.ru"><i class="fas fa-envelope"></i></a></li>
				<li><a href=<?php echo config('social.facebook') ?> data-toggle="tooltip" title="Goodnite Facebook: @nitetronic.goodnite"><i class="fab fa-facebook"></i></a></li>
				<li><a href=<?php echo config('social.twitter') ?> data-toggle="tooltip" title="Goodnite Twitter: @GOODNITERU"><i class="fab fa-twitter"></i></a></li>
				<li><a href=<?php echo config('social.vk') ?> data-toggle="tooltip" title="Goodnite ВКонтакте: vk.com/public174639310"><i class="fab fa-vk"></i></a></li>
				<li><a class="skype" href="#" data-toggle="tooltip" title="GOODNITE Skype ID: "><i class="fab fab fa-skype"></i></a></li>
				<li><a class="whatsapp" href="#" data-toggle="tooltip" title="GOODNITE WhatsApp: <?php echo config('site.phone');?>"><i class="fab fa-whatsapp"></i></a></li>
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
            <p>&copy; <?php echo config('site.copyright.year') ?> MyGoodnite. Smart-подушка от храпа.</p>
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
  <script type="text/javascript" src="<?php echo site_url();?>themes/my/assets/js/main.js"></script>
  
    <?php if (analytics()): ?><?php echo analytics() ?><?php endif; ?>

</body>
</html>