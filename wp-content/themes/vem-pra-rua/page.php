<?php get_header(); ?>
        	<div id="cont-esq">
				<div id="cont-interna">
	           		<h2><?php the_title(); ?></h2>     
	                <div id="compartilhar">
	                	<small><a href="<?php bloginfo('url'); ?>">Home</a> » <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></small>
	                	<div id="social">
		                    <div id="google">
								<g:plusone size="medium" annotation="inline" width="120" href="<?php the_permalink(); ?>"></g:plusone>
		                    </div><!-- #google -->
		                    <div id="twitter">
		                    	<a href="https://twitter.com/share" class="twitter-share-button" data-url="<?php the_permalink(); ?>" url="<?php the_permalink(); ?>" data-lang="en">Tweet</a>
		                    </div><!-- #twitter -->
		                    <div id="facebook">
		                    	<div class="fb-like" data-href="<?php the_permalink(); ?>" data-send="false" data-layout="button_count" data-width="120" data-show-faces="true" data-action="recommend"></div>
		                        <div id="fb-root"></div>
		                    </div><!-- #facebook -->
	                    </div><!-- #social -->
	                </div><!-- #compartilhar -->           
					<?php if( have_posts() ) : while( have_posts() ) : the_post(); ?>
                    <?php if(has_post_thumbnail()) { ?>
	                <div id="img-single">
	                	<?php the_post_thumbnail('noticias-single'); ?>                        
	                    <span><?php the_title(); ?></span>
	                </div><!-- img-single -->
                    <?php } ?>
	                <?php the_content(); ?>
                    <div class="fb-comments" data-href="<?php the_permalink(); ?>" data-num-posts="2" data-width="630"></div>
	                <div id="fb-root"></div>
	                <?php endwhile; else: ?>
	                <?php endif; ?>                    
                </div><!-- #cont-interna -->
            </div><!-- .cont-esq -->
<?php get_sidebar(); ?>
<?php get_footer(); ?>