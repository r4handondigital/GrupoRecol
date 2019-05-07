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
								<li><a href="<?php bloginfo('url'); ?>/empresas">EMPRESAS</a></li>
								<li><?php echo strip_tags(get_the_title()); ?></li>
							</ul>
							                
						</div>
		       		</div>
		       	</div>
       		</section>
       		<section class="capa-bloco">
       			<div class="container bloco-cinza">
       				<div class="row">
       					<div class="col s12">
	       					<h2 class="titulo">
									<?php echo strip_tags(get_the_title()); ?>
							</h2>
						</div>
       				</div>
					<div class="row">
						<div class="col s12 m6 l7">
							
							<?php if(have_posts()) : while(have_posts()) : the_post(); ?>
									<div class="posta">
										<div class="row show-on-small hide-on-med-and-up">
											<p class="center"><img src="<?php the_field('logo'); ?>" class="z-depth-2 responsive-img"></p>
										</div>
										<div class="row">

										<?php the_content(); ?>
										</div>
										
									</div><!--.postagem-->


<!--
											
 <table class="striped highlight">
  <tr>
   <td><i class="fa fa-phone" aria-hidden="true"></i>  +55 (68) 2106-1200</td>
    <td><i class="fa fa-envelope-o" aria-hidden="true"></i> sac@gruporecol.com.br</td>
  </tr>
 <tr>
  <td><i class="fa fa-globe" aria-hidden="true"></i> </td>
  <td><i class="fa fa-map-marker" aria-hidden="true"></i> </td>
 </tr>
</table>
-->

							<?php endwhile; endif; ?> 
				         <?php wp_reset_query(); ?>
						</div>

						<div class="col s12 m6 l5 img-empre hide-on-small-only">
							<img src="<?php the_field('logo'); ?>" class="z-depth-2 responsive-img">
						</div>
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
						    	<a href="<?php the_permalink(); ?>"><img src="<?php the_field('logo_listagem'); ?>" class="responsive-img">
						    	<div class="row no-margin">
						    		<div class="col s12"><?php echo strip_tags(get_the_title()); ?></div>
						    		
						    	</div></a>
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
       	