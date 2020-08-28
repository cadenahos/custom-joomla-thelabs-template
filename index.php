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
			<!-- img src="<?php echo $this->baseurl; ?>/templates/<?php echo $this->template; ?>/banner.JPG"-->
			<jdoc:include type="modules" name="user" style="none"/>
		</div>
		<main class="content-area">
			<h2>Hola a thelabs</h2>
			<p>
				Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce ut tellus et ipsum ullamcorper tincidunt non nec urna. Phasellus posuere odio nunc, ut malesuada metus vulputate ac. Mauris nulla metus, bibendum sed metus at, condimentum bibendum sem. Nunc pretium tortor est, sit amet sagittis magna accumsan id. Aliquam erat volutpat. Mauris sit amet ipsum in odio scelerisque tristique a sit amet neque. Duis nec ipsum in ligula scelerisque ultricies. Donec lacinia vitae orci eget imperdiet. Etiam sit amet urna mattis, ornare odio in, vulputate nisl. Pellentesque viverra consectetur diam eget varius.
			</p>	
		</main>

		<aside class="sidebar">
			<h3>Cosas adicionales</h3>
			<ul>
				<li>lista</li>
				<li>de</li>
				<li>articulos</li>
				<li>Here</li>
				<li>wow!</li>
			</ul>
		</aside>

		<section class="certifications-wrapper">
			<h2>Nuestras certificaciones</h2>

			<section class="certifications">
				<figure class="certification">
					<img src="https://via.placeholder.com/150x150">
				</figure>
			
				<figure class="certification">
					<img src="https://via.placeholder.com/200x150">
				</figure>

				<figure class="certification">			
					<img src="https://via.placeholder.com/100x200">
				</figure>

				<figure class="certification">
					<img src="https://via.placeholder.com/100x100">
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
