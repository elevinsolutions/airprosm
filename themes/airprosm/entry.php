<article id="post-<? the_ID(); ?>" <? post_class(''); ?>>
    
	<? if ( is_singular() ): ?>
			
        	<div class="col-xs-12" style="background-color: white;">
        		<div class="row" style="margin-top: 30px;margin-bottom: 30px">
	                <div class="col-md-4 product_img">
	                    <img style="max-width: 100%;"  class="post-thumbnail-image" src="<?=wp_get_attachment_url( get_post_thumbnail_id(get_the_ID()), 'thumbnail' )?>" />
	                </div>
	                <div class="col-md-6 product_content" style="border-left: 1px solid #e3e3e3">
	                    <h4>Product Id: <span>66</span></h4>
	                    <div class="rating">
	                        <span class="glyphicon glyphicon-star"></span>
	                        <span class="glyphicon glyphicon-star"></span>
	                        <span class="glyphicon glyphicon-star"></span>
	                        <span class="glyphicon glyphicon-star"></span>
	                        <span class="glyphicon glyphicon-star"></span>
	                    </div>
	                    <p></p>
	                    <section class="entry-summary">
							<p><?php the_content(); ?></p>
						</section>
						<p></p>
	                </div>
                </div> <!-- row -->
            </div>

	<? else: ?>
	
    <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
    	
		    <div class="row">
			  <div class="col-xs-12">
			    <div class="thumbnail hvr-shadow-radial" style="box-shadow: 1px 1px 1px 1px #ddd;">
			    	<a href="<? the_permalink(); ?>" title="<? the_title_attribute(); ?>" rel="bookmark">
						<img class="post-thumbnail-image" src="<?=wp_get_attachment_url( get_post_thumbnail_id(get_the_ID()), 'thumbnail' )?>" />
			      	</a>

			    	<div class="caption">
			        <h4>
			        	<a href="<? the_permalink(); ?>" title="<? the_title_attribute(); ?>" rel="bookmark"><? the_title(); ?></a>
			        </h4>
			        <hr>
			        <p><button class="btn btn-danger btn-block" role="button" data-toggle="modal" data-target="#product_view_<?=get_the_ID()?>">Quick View</button> </p>
			      	</div>
			    </div>
			  </div>
			</div>

			<div class="modal fade product_view" id="product_view_<?=get_the_ID()?>">
			    <div class="modal-dialog">
			        <div class="modal-content">
			            <div class="modal-header">
			                <a href="#" data-dismiss="modal" class="class pull-right"><span class="glyphicon glyphicon-remove"></span></a>
			                <h3 class="modal-title"><? the_title(); ?></h3>
			            </div>
			            <div class="modal-body">
			                <div class="row">
			                    <div class="col-md-6 product_img">
			                        <img src="<?=wp_get_attachment_url( get_post_thumbnail_id(get_the_ID()), 'thumbnail' )?>" class="img-responsive">
			                    </div>
			                    <div class="col-md-6 product_content">
			                        <h4>Product Id: <span><?=get_the_ID()?></span></h4>
			                        <div class="rating">
			                            <span class="glyphicon glyphicon-star"></span>
			                            <span class="glyphicon glyphicon-star"></span>
			                            <span class="glyphicon glyphicon-star"></span>
			                            <span class="glyphicon glyphicon-star"></span>
			                            <span class="glyphicon glyphicon-star"></span>
			                        </div>
			                        <p><?get_template_part( 'entry', 'summary' )?></p>
			                        <div class="btn-ground">
			                            <a href="<? the_permalink(); ?>" title="<? the_title_attribute(); ?>" rel="bookmark" class="btn btn-danger btn-block">View Detailed</a>
			                        </div>
			                    </div>
			                </div>
			            </div>
			        </div>
			    </div> <!-- modal-dialog -->
			</div> <!-- modal -->
	</div>
	<? endif; ?>

</article>