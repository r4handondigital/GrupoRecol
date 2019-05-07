	<!DOCTYPE html>
<html lang="pt_BR">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		
		<meta name="keywords" content="">
		<meta name="author" content="">
		<link rel="icon" href="<?php bloginfo('template_url'); ?>/favicon.ico">

		
<?php if (is_home()): ?>
	       
	          <meta name="description" content="O Grupo Recol é genuinamente Acriano. Há mais de 30 anos contribuindo para o desenvolvimento do Estado. São 11 empresas, 2 mil empregos diretos e milhares indiretos.">
	        <?php else: ?>
	          
	            
	        <?php endif ?>
		

		 <title>
    
	    	<?php if (is_home()): ?>
	          Grupo Recol
	      
	        <?php else: ?>
	            <?php echo strip_tags(get_the_title()); ?> |  Grupo Recol
	            
	        <?php endif ?>
	    </title>

	    <meta itemprop="image" content="<?php the_field('capa_noticia'); ?>">

		<meta property="og:type" content="article" />
	    <meta property="og:title" content="<?php echo strip_tags(get_the_title()); ?> ">
	    <?php if(have_posts()) : while(have_posts()) : the_post(); ?>
	    	<meta property="og:description" content="<? $content = get_the_excerpt();
                                echo substr($content, 0, 200);
                                ?>...">
        <?php endwhile; endif; ?> 
		<?php wp_reset_query(); ?>
	    <meta property="og:image" content="<?php the_field('capa_noticia'); ?>" />

	    <!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-41812894-15"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-41812894-15');
</script>

		<!-- FONTES -->
		<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">



		<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  		<link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,700" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url'); ?>/lib/owl-carousel/assets/owl.carousel.min.css">
        <link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url'); ?>/lib/owl-carousel/assets/owl.theme.default.min.css">
        <link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url'); ?>/lib/owl-carousel/assets/owl.theme.green.min.css">
        <link href="<?php bloginfo('template_url'); ?>/lib/materialize/css/materialize.min.css" rel="stylesheet">

		

		<!-- Custom styles for this template -->
		<link type="text/css" href="<?php bloginfo('template_url'); ?>/lib/css/principal.css" rel="stylesheet">


		<?php if (is_home()): ?>
	          <link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url'); ?>/lib/css/index.css">
	        <?php else: ?>
	            <link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url'); ?>/lib/css/interna.css">
	            
	        <?php endif ?>

		<?php wp_head() ?>
	</head>
        <body id="topoxx">

        	<header>
        		<div class="sombra-vermelha"></div>
        		<div class="container">
        		<div class="row">
					<div class="col s12">
						<ul class="social right">
							<li><a href="https://www.instagram.com/gruporecol/" target="_blank"><i class="fab fa-instagram" aria-hidden="true"></i></a></li>
							<li><a href="https://www.linkedin.com/in/grupo-recol-1611a7153" target="_blank"><i class="fab fa-linkedin" aria-hidden="true"></i></a></li>
							<li><a href="https://www.facebook.com/gruporecolbr/" target="_blank"><i class="fab fa-facebook" aria-hidden="true"></i></a></li>
							<li><div id="google_translate_element"></div></li>
						</ul>
					</div>
        		</div>	
        		 <nav>
				    <div class="nav-wrapper ">
				      <a href="<?php bloginfo('url'); ?>/" class="brand-logo"><img src="<?php bloginfo('template_url'); ?>/imgs/grupo-recal-topo.png"></a>
				      <a href="#" data-activates="mobile-demo" class="button-collapse"><i class="material-icons">menu</i></a>
				      <ul class="right hide-on-med-and-down">
				        <!--<li><a class="dropdown-button" href="#!" data-activates="dropdown1">QUEM SOMOS</a></li>-->
				        <li><a href="<?php bloginfo('url'); ?>/institucional">QUEM SOMOS</a></li>
				        <li><a href="#localizacao" class="lgt">LOCALIZAÇÃO</a></li>
				        <li><a href="<?php bloginfo('url'); ?>/category/noticias">NOTÍCIAS</a></li>
				        <!--<li><a href="<?php bloginfo('url'); ?>/empresas">EMPRESAS DO GRUPO</a></li>-->
				        <li><a class="dropdown-button" href="#!" data-activates="dropdown2">EMPRESAS DO GRUPO</a></li>
				        <li><a href="<?php bloginfo('url'); ?>/contato">CONTATO</a></li>
				      </ul>
				      <ul class="side-nav" id="mobile-demo">
				       <li><a href="<?php bloginfo('url'); ?>/">HOME</a></li>
				        <li><a href="<?php bloginfo('url'); ?>/institucional">INSTITUCIONAL</a></li>
 						
				        <li><a href="#localizacao" class="lgt">LOCALIZAÇÃO</a></li>
				        <li><a href="<?php bloginfo('url'); ?>/category/noticias">NOTÍCIAS</a></li>
				        <li><a href="<?php bloginfo('url'); ?>/empresas">EMPRESAS DO GRUPO</a></li>
				         <li><a href="<?php bloginfo('url'); ?>/contato">CONTATO</a></li>
				      </ul>
				    </div>
				  </nav>

				
				 

				</div>


				<!-- Dropdown Structure -->
<ul id="dropdown2" class="dropdown-content">

	<?php query_posts(array( 'post_type' => 'empresas','showposts' => '14' )); ?>
							<?php if(have_posts()) : while(have_posts()) : the_post(); ?>

 		 <li><a href="<?php the_permalink(); ?>"><?php echo strip_tags(get_the_title()); ?></a></li>
  


  <?php endwhile; endif; ?> 
<?php wp_reset_query(); ?> 
</ul>


				<!-- Dropdown Structure -->
<ul id="dropdown1" class="dropdown-content">
  <li><a href="<?php bloginfo('url'); ?>/institucional">INSTITUCIONAL</a></li>
  <li><a href="<?php bloginfo('url'); ?>/diretoria">DIRETORIA</a></li>
</ul>
				
        	</header>
       		

	<?php if (is_home()): ?>


       		<section class="super-destaque owl-carousel owl-theme">
       			<?php query_posts(array( 'post_type' => 'destaque','showposts' => '5' )); ?>
					<?php if(have_posts()) : while(have_posts()) : the_post(); ?>
						<div class="item">
							<img src="<?php the_field('imagem_destaque'); ?>" class="responsive-img">
							<div class="bloco">
								<div class="bloco-sombra">
									<a href="<?php the_field('relacionar_notica'); ?>">
										<h4>
											<span><?php echo get_the_date('d'); ?> de <?php echo get_the_date('F'); ?></span>
										<?php echo strip_tags(get_the_title()); ?></h4>
										<h6 class="lendo">CONTINUAR LENDO</h6>
									</a>
							
								</div>
							</div>
						</div>
					<?php endwhile; endif; ?> 
				<?php wp_reset_query(); ?> 
				
			</section>
			
       	  <?php endif ?>

		<?php wp_head() ?>