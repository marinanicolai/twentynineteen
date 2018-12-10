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

	<p><?php the_field('recipe_instructions'); ?></p>


	
<div class="recipe-features">
	<div class="first">
<span id="features"> features:</span>
<ul>
   <li><img src="<?php bloginfo('template_directory'); ?>/img/grain.svg"></li>
	 <li><img src="<?php bloginfo('template_directory'); ?>/img/chili.svg"></li>
	 <li><img src="<?php bloginfo('template_directory'); ?>/img/salad-1.svg"></li> 

</ul>
	</div>
<div class="second">
<span>cuisine:</span>
<img src="<?php bloginfo('template_directory'); ?>/img/france.svg">
	</div>
</div><!-- end of recepy feature -->

<!--time of the recepy-->
<div>
<ul>
	 <li class="time">  
			<img src="#">
			<h4> 30 min </h4> <!--maybe a ACF field-->		 
	</li>
	<li class="serves">  
			<img src="#">
			<h4>Serves 1 </h4> <!--maybe a ACF field-->		 
	</li>
	<li class="level">  
			<img src="#">
			<h4>Medium </h4> <!--maybe a ACF field-->		 
	</li>
</ul>
</div>
<!--end of time of the recepy-->

<!--direction of the recepy-->
<div>
	<div class="header_direction">
		<h2 class="bordered-title"><i class="os-icon os-icon-thin-paper-list"></i> <span>Directions</span></h2>
	</div>
<p>The beauty of this recipe is that you can vary the 
	flavour combos; herbs work really well, or you can 
	try things like olives, sun-dried tomatoes, chilli
	 or lemon zest. You can make it up to a month in 
	 advance so it’s one less thing to do on the big day, 
	 and keep the leftovers in the freezer so you have
		an instant flavour injection at your fingertips.
		 You can use it with anything from fish to chicken,
		  roast lamb, roast potatoes or bread – delicious!

Add the garlic, chilli, rosemary and anchovies to a
 food processor and whiz until fairly fine. Dice and
  add the cold butter, then whiz again until well combined. </p><!--this is a ACF field-->
</div>
<!--end of direction of the recepy-->




	</div><!-- .entry-content -->

	<footer class="entry-footer">
		<?php twentynineteen_entry_footer(); ?>
	</footer><!-- .entry-footer -->
</article><!-- #post-${ID} -->
