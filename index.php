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
		<div class ="banner">
		<figure>
			<img src="<?php echo $this->baseurl; ?>/templates/<?php echo $this->template; ?>/banner.JPG">
			<figcaption>Con procesos de calidad </figcaption>
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
						<h1>Ejemplo 1</h1>
						<img src="https://via.placeholder.com/1150x150">
			</div>
    			<div class="item">
						<h1>Ejemplo 2</h1>
						<img src="https://via.placeholder.com/1150x150">
			</div>
    			<div class="item">
						<h1>Ejemplo 3 </h1>	
						<img src="https://via.placeholder.com/1150x150">
			</div>
  			</div>
  			<!-- Carousel nav -->
  			<a class="carousel-control left" href="#myCarousel" data-slide="prev">&lsaquo;</a>
  			<a class="carousel-control right" href="#myCarousel" data-slide="next">&rsaquo;</a>
		</div>
		<main class="content-area hero-unit">
			<h2>Hola a thelabs</h2>
			<p>
				Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce ut tellus et ipsum ullamcorper tincidunt non nec urna. Phasellus posuere odio nunc, ut malesuada metus vulputate ac. Mauris nulla metus, bibendum sed metus at, condimentum bibendum sem. Nunc pretium tortor est, sit amet sagittis magna accumsan id. Aliquam erat volutpat. Mauris sit amet ipsum in odio scelerisque tristique a sit amet neque. Duis nec ipsum in ligula scelerisque ultricies. Donec lacinia vitae orci eget imperdiet. Etiam sit amet urna mattis, ornare odio in, vulputate nisl. Pellentesque viverra consectetur diam eget varius.
			</p>	
		</main>


		<section class="certifications-wrapper">
			<h2>Nuestras certificaciones</h2>

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
