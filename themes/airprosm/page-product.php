<?php session_start(); get_header(); ?>

<?php get_sidebar(); ?>

<section id="content" role="main" class="col-sm-12 col-md-9 col-lg-9">
    



<? foreach(get_categories() as $category): ?>
	<? if ($category->category_parent == 0): ?>

		<article id="post-<? the_ID(); ?>" <? post_class('col-xs-12 col-sm-6 col-md-4 col-lg-3'); ?>>
		    <div class="row">
			  <div class="col-xs-12">
			    <div class="thumbnail hvr-shadow-radial" style="box-shadow: 1px 1px 1px 1px #ddd;">
			    	<a href="<?= get_category_link( $category->cat_ID ); ?>" title="Category Name">
						<?= do_shortcode(sprintf('[wp_custom_image_category term_id="%s"]',$category->term_id)); ?>
			      	</a>

			    	<div class="caption">
			        <h4>
			        	<a href="<?= get_category_link( $category->cat_ID ); ?>" title="Category Name"><?= $category->cat_name; ?></a>
			        </h4>
			      	</div>
			    </div>
			  </div>
			</div>
		</article>

	<? endif; ?>
<? endforeach; ?>




    <?php get_template_part( 'nav', 'below' ); ?>
</section>

<? get_footer(); ?>

