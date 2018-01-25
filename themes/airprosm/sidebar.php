<aside id="sidebar" role="complementary" class="col-sm-12 col-md-2 col-lg-2">
    <?php if ( is_active_sidebar( 'primary-widget-area' ) ) : ?>
    <div id="primary" class="widget-area">
        <ul class="xoxo">
            <?php dynamic_sidebar( 'primary-widget-area' ); ?>
        </ul>
    </div>
    <?php endif; ?>

        	<div class="panel-group" id="accordion">
            	
            	<!-- loop all parent categories -->
		        <? foreach(get_categories(array('parent' => 0)) as $category): ?>

		            <div class="panel panel-default accordion-toggle" >
		              <div class="panel-heading <? if (is_category($category->cat_ID)) echo 'active';  ?>">
		                <h4 class="panel-title">

		                	<!-- if parent categories have post, go to them once clicked -->
		                	<? if ($category->count > 0): ?>
		                  		<a href="<?=get_category_link( $category->term_id )?>" style="display:block;">
				                  	<?=$category->name?> 
				                </a>

				            <!-- other wise, open the child categories panel -->
		                  	<? else: ?>
		                  		<a data-toggle="collapse" data-parent="#accordion" href="#collapse<?=$category->slug;?>" style="display:block;">
				                  	<?=$category->name?> 
				                </a>
		                  	<? endif; ?>
			                  	
		                </h4>
		              </div>

		              <div id="collapse<?=$category->slug;?>" class="panel-collapse collapse  <? if (cat_is_ancestor_of($category->cat_ID, get_the_category()[0]->cat_ID)) echo 'in'; ?>">
		                <div class="list-group">

		                	<!-- loop all child categories -->
		                	<? foreach(get_categories(array( 'parent'=> $category->cat_ID )) as $category): ?>
		                		<a class="list-category-child list-group-item <? if (is_category($category->cat_ID) || in_category($category->cat_ID)) echo 'active';  ?>" href="<?=get_category_link($category->term_id)?>"> <?=$category->name?> </a>
			                <? endforeach; ?>
		                </div>
		              </div>
		            </div>

				<? endforeach; ?>

    </div> <!-- container -->

</aside>