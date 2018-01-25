<?php get_header(); ?>

<br>

<div style="margin-top:120px">
	<?php get_sidebar(); ?>

	<code style="display:none;">category.php</code>

	<section id="content" role="main" class="col-sm-12 col-md-9 col-lg-9">
	    <header class="header">
	        <h1 class="category-title"><?php single_cat_title(); ?></h1>
	        <hr>
	    </header>
	    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
	    <?php get_template_part( 'entry' ); ?>
	    <?php endwhile; endif; ?>
	    <?php get_template_part( 'nav', 'below' ); ?>
	</section>
</div>
<?php get_footer(); ?>