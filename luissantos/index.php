<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package luissantos
 */




get_header(); ?>


<!-- ========== HOME STATIC ========= -->
<div class="home">
		<div class="row about">
				<div class="large-4 large-offset-2 columns">
						<h5>Hello, <br>I’m Luís, and I’m a designer living and working in Oporto city, Portugal. My focus is on graphic design, web design and branding.</h5>
				</div>
		</div>

				<div class="object">
						<h1 id="horizontal">graphic and web designer</h1>
				</div>

		<div class="row info">
				<div class="medium-2 columns">
						<h4>I am available to work with you in future projects.Please don’t hesitate to contact me.</h4>
				</div>

				<div class="medium-2 columns">
						<h3>Contacts</h3>
						<h4><a href="mailto:luis@luissantos.org" target="_top">luis@luissantos.org</a><br>+351 917 967 426</h4>
				</div>

				<div class="medium-2 columns">
						<h3><a href="https://www.linkedin.com/in/luís-santos-18b365110" target="_blank">Follow me in Linkedin</a></h3>
				</div>

				<div class="medium-2 columns end">
						<h3>somewhere in Porto</h3>
				</div>
		</div>
</div>
<!-- ========== END ========= -->







<div class="container">
	<div class="row container">

			<div class="title">
					<h1 class="large-4 large-offset-2 column">Selected works</h1>
			</div>



			<!-- Start the Loop. -->
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

<!-- Test if the current post is in category 3. -->
<!-- If it is, the div box is given the CSS class "post-cat-three". -->
<!-- Otherwise, the div box is given the CSS class "post". -->

<?php if ( in_category( '' ) ) : ?>
	<div class="post-cat-three">
<?php else : ?>
	<div class="post">
<?php endif; ?>


<!-- Display the Title as a link to the Post's permalink. -->
<h2><a href="<?php the_permalink(); ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>


<!-- Display the Post's -->
<div class="entry modal">
	<?php the_content(); ?>
</div>

<!-- Stop The Loop (but note the "else:" - see next line). -->
<?php endwhile; else : ?>

<p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>

<!-- stop The Loop. -->
<?php endif; ?>







		</div>
</div>





























		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
