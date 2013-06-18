<?php get_header(); ?>
        	<div id="cont-esq">
            	<div id="banner">
                	<a href="<?php bloginfo('url'); ?>/manifestacoes"><img src="<?php bloginfo('template_url'); ?>/img/banner.jpg" width="630" height="330" alt="Banner" /></a>
                </div><!-- #banner -->
                <div id="ult-noticias">
                	<div class="box-titulo cor-noticias">
                    	<h2><a href="<?php bloginfo('url'); ?>/noticias">Últimas Notícias <span>»</span></a></h2>
                        <a href="<?php bloginfo('url'); ?>/noticias" class="ver-mais">+ ver todas notícias</a>
                    </div><!-- .box-titulo -->
                    <div id="nivel1">
                      	<?php query_posts('category_name=noticias&posts_per_page=1'); ?>
                        <?php if( have_posts() ) : while( have_posts() ) : the_post(); ?>                        
                        <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                        <p><?php the_excerpt(); ?></p>
                        <?php endwhile; else: ?>
                        <?php endif; ?>
                        <?php wp_reset_query(); ?>
                    </div><!-- .noticia-topo -->
                    <ul id="nivel2">
                        <?php query_posts('category_name=noticias&posts_per_page=2&offset=2'); ?>
                        <?php if( have_posts() ) : while( have_posts() ) : the_post(); ?>
                        <li>
                            <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                            <p><?php the_excerpt(); ?></p>
                        </li>
                        <?php endwhile; else: ?>
                        <?php endif; ?>
                        <?php wp_reset_query(); ?>
                    </ul>
                    <ul id="nivel3">
                        <?php query_posts('category_name=noticias&posts_per_page=2&offset=4'); ?>
                        <?php if( have_posts() ) : while( have_posts() ) : the_post(); ?>
                        <li>
                            <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('thumb_n3'); ?></a>
                            <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                        </li>
                        <?php endwhile; else: ?>
                        <?php endif; ?>
                        <?php wp_reset_query(); ?>
                    </ul>
                    <ul id="nivel4">
                        <?php query_posts('category_name=noticias&posts_per_page=4&offset=4'); ?>
                        <?php if( have_posts() ) : while( have_posts() ) : the_post(); ?>
                        <li>
                            <a href="<?php the_permalink(); ?>">
                                <?php the_post_thumbnail('thumb_n4'); ?>
                                <h2><?php the_title(); ?></h2>
                            </a>
                        </li>
                        <?php endwhile; else: ?>
                        <?php endif; ?>
                        <?php wp_reset_query(); ?>
                    </ul>
                </div><!-- #ultimas-noticias -->
            </div><!-- .cont-esq -->
<?php get_sidebar(); ?>
<?php get_footer(); ?>