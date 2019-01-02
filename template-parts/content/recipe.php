<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage Twenty_Nineteen
 * @since 1.0.0
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<?php
		if ( is_sticky() && is_home() && ! is_paged() ) {
			printf( '<span class="sticky-post">%s</span>', _x( 'Featured', 'post', 'twentynineteen' ) );
		}
		if ( is_singular() ) :
			the_title( '<h1 class="entry-title">', '</h1>' );
		else :
			the_title( sprintf( '<h2 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h2>' );
		endif;
		?>
	</header><!-- .entry-header -->

	<?php twentynineteen_post_thumbnail(); ?>

	<div class="entry-content">
		<?php
		the_content(
			sprintf(
				wp_kses(
					/* translators: %s: Name of current post. Only visible to screen readers */
					__( 'Continue reading<span class="screen-reader-text"> "%s"</span>', 'twentynineteen' ),
					array(
						'span' => array(
							'class' => array(),
						),
					)
				),
				get_the_title()
			)
		);

		wp_link_pages(
			array(
				'before' => '<div class="page-links">' . __( 'Pages:', 'twentynineteen' ),
				'after'  => '</div>',
			)
		);
		?>
<div class="main">	
	<div class="left">	
		<div class="ingredient">
			<h3><i class="os-icon os-icon-thin-paper-holes-text"></i>  Ingredients </h3>
				<div class="ingredient-serves"></div>
				<div class="single_ingredient">
						<?php if( have_rows('ingredients') ): ?> 
    					<ul> 
        				<?php while( have_rows('ingredients') ): the_row(); ?> 
        					<li>
										<i class="os-icon os-icon-circle-o"></i>
										<?php the_sub_field('ingredient'); ?>
									</li> 
      					<?php endwhile; ?> 
    					</ul> 
						<?php endif; ?><!--ACF field-->
	        </div>
				</div><!--end of ingredience-->
				<div class="nutritional">
					<h3><i class="os-icon os-icon-thin-info"></i> nutritional information </h3>
					  <div class="nutritional_information">
				    	<ul>
									<li> 
											<?php the_field('fat_amount_'); ?>g 
												 <span class="info"> fat</span>
									</li>
									<li> 
											 <?php the_field('protein_amount'); ?>g 
													<span class="info"> protein</span>
									</li>
									<li>
												<?php the_field('carbs_amount'); ?>g
														<span class="info"> carbs</span>
									</li>
									<li> 
											 <?php the_field('calories_amount'); ?>
														 <span class="info"> calories</span>
									</li>
									<li> 
											 <?php the_field('sugar_amount'); ?>g
														 <span class="info"> sugars</span>
									</li>
									<li> 
											 <?php the_field('trans_fat_amount'); ?>g 
														 <span class="info">trans fat</span>
									</li>
			      	</ul> 
	         </div><!--end of nutritional information-->
				</div>
			</div><!--end of left-->

<div class="right">
	<p><?php the_field('recipe_name'); ?></p>	

<div class="recipe-features">
	<div class="first">
<span id="features"> features:</span>
<ul>
   <li><img src="<?php bloginfo('template_directory'); ?>/img/grain.svg"></li>
	 <li><img src="<?php bloginfo('template_directory'); ?>/img/chili.svg"></li>
	 <li><img src="<?php bloginfo('template_directory'); ?>/img/salad-1.svg"></li> 
</ul>
	</div> <!-- end of first -->

<div class="cuisine">
<span id="cuisine">cuisine:</span>
<div class="photo">
<img src="<?php bloginfo('template_directory'); ?>/img/france.svg">
  </div>
	</div> <!--end of cuisine--> 

</div><!-- end of recepy feature -->

<!--time of the recepy-->
<div class="single-meta">
<ul>
			<li class="single-meta-cooking-time">
					 <i class="os-icon os-icon-thin-clock-busy"></i>
								<span>
									<?php the_field('time_to_cook'); ?> min
								</span>
			</li> 	 
			 
			<li class="single-meta-serves">
					<i class="os-icon os-icon-thin-serve"></i>
					      <span>
                  Serves <?php the_field('serves'); ?>
								</span>
			</li>
  
			<li class="single-meta-difficulty">
				<i class="os-icon os-icon-thin-cook"></i>
				   <span>
						 <?php the_field('level'); ?>
						</span>
			</li>  
	
   </ul>
</div>
<!--end of time of the recepy-->

<!--direction of the recepy-->
<div class="direction">
	<div class="header_direction">
		<i class="os-icon os-icon-thin-paper-list"></i> 
		<span class="bordered-title">Directions</span>
	</div>
	<?php the_field('directions'); ?>
<!--this is a ACF field-->
</div>
<!--end of direction of the recepy-->

</div><!-- .entry-content -->
	</div>
	</div>

	<footer class="entry-footer">
		<?php twentynineteen_entry_footer(); ?>
	</footer><!-- .entry-footer -->
</article><!-- #post-${ID} -->
