<?php get_header(); ?>

<br>

<?php get_sidebar(); ?>

<code style="display:none;">single.php</code>

<section id="content" role="main" class="col-sm-12 col-md-9 col-lg-9">
	<header class="header">
        <h1 class="entry-title"><?php the_title(); ?></h1>
        <hr>
    </header>
	<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
	<?php get_template_part( 'entry' ); ?>
	<?php endwhile; endif; ?>
    
</section>

<?php get_footer(); ?>