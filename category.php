<?php
  /* Busca o arquivo header.php do tema e includa na página */
  get_header();
?>
       		
       	<section>
        		<div class="container">
		       		<div class="row">
		       			<div class="col s12 m4">&nbsp</div>
						<div class="col s12 m8">
							<ul class="map-nav">
								<li><a href="<?php bloginfo('url'); ?>">home</a></li>
								<li>notícias</li>
							</ul>
							                
						</div>
		       		</div>
		       	</div>
       		</section>
       		<section class="capa-bloco">
       			<div class="container bloco-cinza">
       				<div class="row">
       					<h2 class="titulo">
								notícias
							</h2>
       				</div>
					<div class="row">
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


						
					</div>


					<div class="navigation">
		                <?php if (function_exists('pagination_funtion')) pagination_funtion(); ?>
		            </div>

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
						    	<a href="<?php the_permalink(); ?>" ><img src="<?php the_field('logo_listagem'); ?>" class="responsive-img"></a>
						    	<div class="row no-margin">
						    		<div class="col s12"><?php echo strip_tags(get_the_title()); ?></div>
						    		
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
       	