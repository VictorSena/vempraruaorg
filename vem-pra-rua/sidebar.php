            <div id="cont-dir">
            	<div id="videos-dest">
	            	<div class="box-titulo cor-videos">
	                    <h2>Vídeos em destaque <span>»</span></h2>
	                </div><!-- .box-titulo -->
                    <div class="videos">
		            	<div id="video"></div><!-- .video -->
		                <a class="prev browse"></a>
		                <div class="menu_tv">
		                    <ul class="items clearfix">
		                        <?php query_posts('category_name=videos&order=desc'); ?>
		                        <?php if( have_posts() ) : while( have_posts() ) : the_post(); ?>
		                        <li><a href="http://www.youtube.com/watch?v=<?php campoPersonalizado('ID Vídeo'); ?>"></a></li>
		                        <?php endwhile; else: ?>
		                        <?php endif; ?>
		                        <?php wp_reset_query(); ?>
		                    </ul>
		                </div><!-- .menu_tv -->
		                <a class="next browse"></a>
		        	</div><!-- .videos -->                    
                </div><!-- #videos-dest -->
                <div class="fb-like-box" data-href="https://www.facebook.com/vempraruaorg" data-width="300" data-show-faces="true" data-stream="false" data-show-border="true" data-header="false"></div>
            </div><!-- .cont-dir -->