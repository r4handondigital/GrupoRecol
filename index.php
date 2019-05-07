<?php  get_header(); ?>
       		
       		<section class="capa-bloco">
       			<div class="container bloco-cinza">
					<div class="row">
						<div class="col s12 m6 l8">
							<h2 class="titulo">
								Quem somos
							</h2>
							<p>Somos um grupo genuinamente acreano, fazendo parte do desenvolvimento do Estado há mais de 30 anos. Atualmente possuímos empresas nos estados do Acre, Rondônia e Mato Grosso, representando diversos setores do segmento atacadista, entre eles estão medicamentos, perfumaria, higiene e limpeza. </p>
							<p><a href="<?php bloginfo('url'); ?>/institucional" class="waves-effect waves-light btn-large">continue lendo</a> <a href="<?php bloginfo('url'); ?>/empresas" class="waves-effect waves-light btn-large">empresas do grupo</a></p>
						</div>

						<div class="col s12 m6 l4">
							<div class="img-destaques owl-carousel owl-theme">
							    <div class="item"><img src="<?php bloginfo('template_url'); ?>/imgs/img-recol.jpg"></div>
							   
							    
							</div>
						</div>
					</div>
 
       			</div>
       		</section>

       		<section>
       			<div class="container">
					<div class="row">
						<div class="col s12">
							<h2 class="titulo">
								notícias
							</h2>
						</div>
					</div><!--.row-->
					<div class="row">

					<?php query_posts(array( 'post_type' => 'post','showposts' => '4', 'cat' => '11' )); ?>
          				<?php if(have_posts()) : while(have_posts()) : the_post(); ?>

						<div class="col s12 m6 l3 box-noticia">
							<h4>
								<span><?php echo get_the_date('d'); ?> de <?php echo get_the_date('F'); ?></span>
								<?php echo strip_tags(get_the_title()); ?>
								
							</h4>
							<a href="<?php the_permalink(); ?>">
								<img src="<?php the_field('capa_noticia'); ?>" class="responsive-img">
								<p class="tapx"><? $content = get_the_excerpt();
                                echo substr($content, 0, 50);
                                ?>...</p>
								<h6 class="continue">CONTINUAR LENDO</h6>
							</a>
						</div><!--.noticia-->

							 <?php endwhile; endif; ?> 
		         	<?php wp_reset_query(); ?>  


						
					</div><!--.row-->
					<div class="row">
						<p class="center"><a href="<?php bloginfo('url'); ?>/category/noticias" class="waves-effect waves-light btn-large">mais notícias</a></p>
					</div><!--.row-->
       			</div>
       		</section>

       		<section class="sessao-empresa">
       			<div class="container">
					<div class="row">
						<h2 class="titulo">
								empresas do grupo
						</h2>
					</div>

					<div class="row">
						<div class="nav-empresas owl-carousel owl-theme">


						<?php query_posts(array( 'post_type' => 'empresas','showposts' => '14' )); ?>
							<?php if(have_posts()) : while(have_posts()) : the_post(); ?>

						    <div class="item">
						    	<a href="<?php the_permalink(); ?>"><img src="<?php the_field('logo_listagem'); ?>" class="responsive-img"></a>
						    	<div class="row no-margin">
						    		<div class="col s12"><?php echo strip_tags(get_the_title()); ?></div>
						    		<!--<div class="col s4"><a href="<?php the_permalink(); ?>" class="sbmais">saiba mais</a></div>-->
						    	</div>
						    </div><!--.item-->

							 <?php endwhile; endif; ?> 
			         	<?php wp_reset_query(); ?> 


						   
						   
						</div>
					</div>
       			</div>
       		</section>
<?php
  /* Busca o arquivo header.php do tema e includa na página */
  get_footer();
?>
       	