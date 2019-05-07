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
								<li><?php echo strip_tags(get_the_title()); ?></li>
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
									<?php echo strip_tags(get_the_title()); ?>
							</h2>
						</div>
       				</div>
					<div class="row">
						<div class="col s12 m6 l8">
							

				<?php if(have_posts()) : while(have_posts()) : the_post(); ?>
						<div class="posta">
							
							<?php the_content(); ?>
						</div><!--.postagem-->
				<?php endwhile; endif; ?> 
	         <?php wp_reset_query(); ?>


	         <p><a href="<?php bloginfo('url'); ?>/empresas" class="waves-effect waves-light btn-large">conheça as empresas do grupo</a></p>

						</div>


						<div class="col s12 m6 l4">
							<div class="img-destaques owl-carousel owl-theme">
							    <div class="item"><img src="<?php bloginfo('template_url'); ?>/imgs/img-recol.jpg"></div>
							   
							    
							</div>
						</div>

						
					</div>

       			</div>
       		</section>

       		<!-- <section class="sessao-empresa">
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
						    	<img src="<?php the_field('logo_listagem'); ?>" class="responsive-img">
						    	<div class="row no-margin">
						    		<div class="col s6"><?php echo strip_tags(get_the_title()); ?></div>
						    		<div class="col s6"><a href="<?php the_permalink(); ?>" class="sbmais">saiba mais</a></div>
								
						    	</div>
						    </div>

							 <?php endwhile; endif; ?> 
			         	<?php wp_reset_query(); ?> 


						   
						   
						</div>
					</div>
       			</div>
       		</section>-->
<?php
  /* Busca o arquivo header.php do tema e includa na página */
  get_footer();
?>
       	