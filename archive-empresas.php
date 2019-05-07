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
								<li>EMPRESAS</li>
							</ul>
							                
						</div>
		       		</div>
		       	</div>
       		</section>
       		<section class="capa-bloco">
       			<div class="container ">
       				<div class="row">
       					<div class="col s12">
	       					<h2 class="titulo">
									empresas do grupo
							</h2>
						</div>
       				</div>
					<div class="row">
						<?php if(have_posts()) : while(have_posts()) : the_post(); ?>

						<div class="col s12 m6 l3 " style="margin-bottom: 25px;">
							<div class="z-depth-1">
							<a href="<?php the_permalink(); ?>"><img src="<?php the_field('logo_listagem'); ?>" class="responsive-img"></a>
						    	<div class="row no-margin">
						    		<!--<div class="col s12"><?php echo strip_tags(get_the_title()); ?></div>
						    		<div class="col s4"><a href="<?php the_permalink(); ?>" class="sbmais">saiba mais</a></div>-->
						    	</div>
						    </div>
						</div><!--.noticia-->

							 <?php endwhile; endif; ?> 
		         	<?php wp_reset_query(); ?>  


						
					</div>


					<div class="navigation">
		                <?php if (function_exists('pagination_funtion')) pagination_funtion(); ?>
		            </div>

       			</div>
       		</section>

       		
<?php
  /* Busca o arquivo header.php do tema e includa na página */
  get_footer();
?>
       	