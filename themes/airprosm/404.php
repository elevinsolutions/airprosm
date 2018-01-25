<?php get_header(); ?>
 <div class="errorPage">
	<section id="content" role="main">
	<article id="post-0" class="post not-found">
	 <div class="container">
	 	<div style="margin-top: 170px; padding-bottom: 350px;">
			<header class="header">
			<h1 class="entry-title"><?php _e( 'Not Found', 'blankslate' ); ?></h1>
			</header>
			<section class="entry-content">
			<p><?php _e( 'Nothing found for the requested page. Try a search instead?', 'blankslate' ); ?></p>
			<?php get_search_form(); ?>
			</section>
	    </div>
	 </div>
	</article>
	</section>
 </div>

<?php get_footer(); ?>