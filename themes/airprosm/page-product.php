<?php session_start(); get_header(); ?>

<br>
<div class="pageProduct" style="margin-top:120px">
	<?php get_sidebar(); ?>

	<section id="content" role="main" class="col-sm-12 col-md-9 col-lg-9 productsPage" style="padding-bottom:160px;">
        <div class="row" style="padding-bottom: 10px;">
          <div class="col-md-12">
            <h2 style=" border-bottom: 1px solid #dbdbdb;
					    font-weight: bold;
					    font-size: 34px;
					    padding-bottom: 10px;
					    color: #404040;">Products</h2>
          </div>
        </div>
        <div class="col-md-4 col-lg-3 col-xl-3 col-sm-6 col-xs-12">
			<div class="panel panel-default panel-front">		
			
				<div class="panel-heading">
				
					<h4 class="panel-title"><a href="<?php echo get_bloginfo('wpurl'); ?>/category/air-conditioning/"><img src="<?php echo get_template_directory_uri(); ?>/images/ProductAC.jpg"></a></h4>
					
				</div>
				
				<div class="panel-body">
				
					<h4>Air Conditioning</h4>
				

				</div>
			</div>	
        </div>
        <div class="col-md-4 col-lg-3 col-xl-3 col-sm-6 col-xs-12">
			<div class="panel panel-default panel-front">		
			
				<div class="panel-heading">
				
					<h4 class="panel-title"><a href="<?php echo get_bloginfo('wpurl'); ?>/category/boilers/"><img src="<?php echo get_template_directory_uri(); ?>/images/ProductBoiler.jpg"></a></h4>
					
				</div>
				
				<div class="panel-body">
				
					<h4>Boilers</h4>
				
				</div>
			</div>	
        </div>
        <div class="col-md-4 col-lg-3 col-xl-3 col-sm-6 col-xs-12">
			<div class="panel panel-default panel-front">		
			
				<div class="panel-heading">
				
					<h4 class="panel-title"><a href="<?php echo get_bloginfo('wpurl'); ?>/category/commercial-rooftop-units/"><img src="<?php echo get_template_directory_uri(); ?>/images/ProductRooftop.jpg"></a></h4>
					
				</div>
				
				<div class="panel-body">
				
					<h4>Rooftop Units</h4>
					
				</div>
			</div>	
        </div>
        <div class="col-md-4 col-lg-3 col-xl-3 col-sm-6 col-xs-12">
			<div class="panel panel-default panel-front">		
			
				<div class="panel-heading">
				
					<h4 class="panel-title"><a href="<?php echo get_bloginfo('wpurl'); ?>/category/controls-accessories/"><img src="<?php echo get_template_directory_uri(); ?>/images/ControlsAccss.jpeg"></a></h4>
					
				</div>
				
				<div class="panel-body">
				
					<h4>Controls & Accesories</h4>
				
				</div>
			</div>	
        </div>
        <div class="col-md-4 col-lg-3 col-xl-3 col-sm-6 col-xs-12">
			<div class="panel panel-default panel-front">		
			
				<div class="panel-heading">
				
					<h4 class="panel-title"><a href="<?php echo get_bloginfo('wpurl'); ?>/category/ductless-systems/"><img src="<?php echo get_template_directory_uri(); ?>/images/DuctlessSystems.jpeg"></a></h4>
					
				</div>
				
				<div class="panel-body">
				
					<h4>Ductless Systems</h4>
				

				</div>
			</div>	
        </div>
        <div class="col-md-4 col-lg-3 col-xl-3 col-sm-6 col-xs-12">
			<div class="panel panel-default panel-front">		
			
				<div class="panel-heading">
				
					<h4 class="panel-title"><a href="<?php echo get_bloginfo('wpurl'); ?>/category/furnaces/"><img src="<?php echo get_template_directory_uri(); ?>/images/ProductFurnace.jpg"></a></h4>
					
				</div>
				
				<div class="panel-body">
				
					<h4>Furnaces</h4>
				
				</div>
			</div>	
        </div>
        <div class="col-md-4 col-lg-3 col-xl-3 col-sm-6 col-xs-12">
			<div class="panel panel-default panel-front">		
			
				<div class="panel-heading">
				
					<h4 class="panel-title"><a href="<?php echo get_bloginfo('wpurl'); ?>/category/iaq/"><img src="<?php echo get_template_directory_uri(); ?>/images/iaq.jpeg"></a></h4>
					
				</div>
				
				<div class="panel-body">
				
					<h4>IAQ</h4>
					
				</div>
			</div>	
        </div>
        <div class="col-md-4 col-lg-3 col-xl-3 col-sm-6 col-xs-12">
			<div class="panel panel-default panel-front">		
			
				<div class="panel-heading">
				
					<h4 class="panel-title"><a href="<?php echo get_bloginfo('wpurl'); ?>/category/indoor-units/"><img src="<?php echo get_template_directory_uri(); ?>/images/IndoorUnits.jpeg"></a></h4>
					
				</div>
				
				<div class="panel-body">
				
					<h4>Indoor Units</h4>
				
				</div>
			</div>	
        </div>
        <div class="col-md-4 col-lg-3 col-xl-3 col-sm-6 col-xs-12">
			<div class="panel panel-default panel-front">		
			
				<div class="panel-heading">
				
					<h4 class="panel-title"><a href="<?php echo get_bloginfo('wpurl'); ?>/category/outdoor-units/"><img src="<?php echo get_template_directory_uri(); ?>/images/OutdoorUnits.jpeg"></a></h4>
					
				</div>
				
				<div class="panel-body">
				
					<h4>Outdoor Units</h4>
					
				</div>
			</div>	
        </div>
        <div class="col-md-4 col-lg-3 col-xl-3 col-sm-6 col-xs-12">
			<div class="panel panel-default panel-front">		
			
				<div class="panel-heading">
				
					<h4 class="panel-title"><a href="<?php echo get_bloginfo('wpurl'); ?>/category/residential-controls/"><img src="<?php echo get_template_directory_uri(); ?>/images/ProductResidentC.jpg"></a></h4>
					
				</div>
				
				<div class="panel-body">
				
					<h4>Residential Controls</h4>
				
				</div>
			</div>	
        </div>

    <!--
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

    -->
	    <?php get_template_part( 'nav', 'below' ); ?>
	</section>
</div>
<? get_footer(); ?>

