<?php
/**
 * Template Name: Recipe Page
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage Twenty_Nineteen
 * @since 1.0.0
 */
get_header();
?>

<section id="primary" class="content-area">
		<main id="main" class="site-main">
    <article class="entry">
    <div class="entry-content">
    
 <?php if( have_rows('recipes') ): ?>

      <ul class="recipes">

        <?php while( have_rows('recipes') ): the_row(); ?>



 <h1> thisi is a recipe.php page</h1>




          <li>
            <div>
              <h1><?php the_sub_field('recipe_name'); ?></h1>
              <?php the_sub_field('recipe_ingredients'); ?>
            </div>
          </li>

        <?php endwhile; ?>

      </ul>

    <?php endif; ?>

    
    </div>
    </article>

		</main><!-- #main -->
	</section><!-- #primary -->
<?php
get_footer();
