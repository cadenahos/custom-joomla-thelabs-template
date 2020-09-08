<?php defined('_JEXEC') or die;
JHtml::_('bootstrap.framework');
JHtml::_('bootstrap.loadCss', true);
  $app = JFactory::getApplication();
  $menu = $app->getMenu()->getActive();
  $pageclass = '';
  if (is_object($menu))
  $pageclass = $menu->params->get('pageclass_sfx');
?>
<!doctype html>
<html lang="<?php echo $this->language; ?>">
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<jdoc:include type="head" />
<!--[if lt IE 9]>
	<script src="<?php echo $this->baseurl ?>/media/jui/js/html5.js"></script>
<![endif]-->
<link href="templates/<?php echo $this->template; ?>/css/custom.css" rel="stylesheet" type="text/css" />
<link rel="apple-touch-icon" href="templates/<?php echo $this->template; ?>/apple-touch-icon-57x57.png" />
<link rel="apple-touch-icon" sizes="72x72" href="templates/<?php echo $this->template; ?>/apple-touch-icon-72x72.png" />
<link rel="apple-touch-icon" sizes="114x114" href="templates/<?php echo $this->template; ?>/apple-touch-icon-114x114.png" />
</head>
<body >
<div class="container">
		<div class="top-menu">
			<jdoc:include type="modules" name="position-0" style="bootstrap" />
		</div>	
		<header class ="logo">	
		<jdoc:include type="modules" name="logo" style="html5" />
		</header>	
		<nav class="main-menu">
		<jdoc:include type="modules" name="main_nav" style="none" />
		</nav>
		<div class ="banner ">
		<figure class="img-circle">
			<img src="<?php echo $this->baseurl; ?>/templates/<?php echo $this->template; ?>/banner.JPG">
		</figure>


		</div>
		<div id="myCarousel" class="carousel slide">
  			<ol class="carousel-indicators">
    				<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
    				<li data-target="#myCarousel" data-slide-to="1"></li>
    				<li data-target="#myCarousel" data-slide-to="2"></li>
 			</ol>
  				<!-- Carousel items -->
  			<div class="carousel-inner">
			<div class="active item">
						<h1 class="text-center">Ejemplo 1</h1>
					<img src="<?php echo $this->baseurl; ?>/templates/<?php echo $this->template; ?>/img_scale_1.jpg">

			</div>
    			<div class="item">
						<h1 class="text-center">Ejemplo 2</h1>
					<img src="<?php echo $this->baseurl; ?>/templates/<?php echo $this->template; ?>/img_scale_2.jpg">
	
			</div>
    			<div class="item">
						<h1 class="text-center">Ejemplo 3 </h1>	
					<img src="<?php echo $this->baseurl; ?>/templates/<?php echo $this->template; ?>/img_scale_3.jpg">

			</div>
  			</div>
  			<!-- Carousel nav -->
  			<a class="carousel-control left" href="#myCarousel" data-slide="prev">&lsaquo;</a>
  			<a class="carousel-control right" href="#myCarousel" data-slide="next">&rsaquo;</a>
		</div>
		<main class="content-area hero-unit ">
			<h2 class="text-left">	Nos acompaña un grupo selecto de quimicos farmaceuticos, en el
				desarrollo de nuestros procesos de calidad.
			</h2>
		</main>

		<section class="certifications-wrapper">
			<h2 class="text-center">Nuestras certificaciones</h2>

			<section class="certifications">
				<figure class="certification img-polaroid">
					<img src="https://via.placeholder.com/200x150">
				</figure>
			
				<figure class="certification img-polaroid">
					<img src="https://via.placeholder.com/200x150">
				</figure>

				<figure class="certification img-polaroid">			
					<img src="https://via.placeholder.com/200x150">
				</figure>

				<figure class="certification img-polaroid">
					<img src="https://via.placeholder.com/200x150">
				</figure>
			</section>
		</section>

		<footer class="footer">
			<p>
			&copy; 2020 thelabs. Dcsupport. All rights (perhaps) reserved.
			<p>
			</footer>
		</div>
	</body>
</html>
