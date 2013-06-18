<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title><?php
	/*
	 * Imprime Título
	 */
	global $page, $paged;

	wp_title( '-', true, 'right' );

	// Nome da Página
	bloginfo( 'name' );

	// Descrição
	$site_description = get_bloginfo( 'description', 'display' );
	if ( $site_description && ( is_home() || is_front_page() ) )
		echo " - $site_description";
	?></title>
<link rel="shortcut icon" href="<?php bloginfo('template_url') ?>/img/favicon.png" />
<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'stylesheet_url' ); ?>" />
<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<div id="main">
	<?php /*
	<div id="acessibilidade">
    	<div id="opcoes-acessibilidade">
	    	<ul>
	    		<li><a href="#conteudo" title="ir" id="ir">ir conteúdo</a></li>
	    		<li><a href="<?php bloginfo('url') ?>/acessibilidade" title="Acessibilidade" id="botao-acessibilidade">acessibilidade</a></li>
	    		<li>
	            	<ul>
	                	<li><a href="#" title="Fonte normal" id="normal"></a></li>
	                    <li><a href="#" title="Aumentar fonte" id="aumentar"></a></li>
	                    <li><a href="#" title="Diminuir fonte" id="diminuir"></a></li>
	                    <li>fonte</li>
	                </ul>
	            </li>
	    		<li><li><a href="#" title="Contraste" id="contraste">contraste</a></li></li>
	    	</ul>
        </div><!-- #opcoes-acessibilidade -->
    </div><!-- #acessibilidade -->
    */ ?>
    <div id="topo" class="clearfix">
        <a href="<?php bloginfo('url'); ?>" id="logo"><img src="<?php bloginfo('template_url'); ?>/img/logo.png" height="71" width="296" alt="Vem Pra Rua" /></a>
        <div id="pesquisar">
            <form method="get" id="searchform" action="<?php bloginfo('url'); ?>" >
                <input type="text" name="s" id="s" value="Pesquisar" />
                <input type="submit" value="OK" />                
            </form>
        </div><!-- #pesquisar -->
    </div><!-- #topo -->
    <div id="menu">
	    <ul>        	
	        <li <?php if(is_home()) { ?>class="ativo"<?php } ?>>
	        	<?php if(is_home()) { ?><span class="hover-esq"></span><?php }?>
	        	<a href="<?php bloginfo('url'); ?>">Home</a>
	        	<?php if(is_home()) { ?><span class="hover-dir"></span><?php } ?>
	        </li>
	        <li <?php if(is_page('sobre')) { ?>class="ativo"<?php } ?>>
	        	<?php if(is_page('sobre')) { ?><span class="hover-esq"></span><?php }?>
	        	<a href="<?php bloginfo('url'); ?>/sobre">Sobre</a>
	        	<?php if(is_page('sobre')) { ?><span class="hover-dir"></span><?php } ?>
	        </li>
	        <li <?php if(is_page('o-manifesto')) { ?>class="ativo"<?php } ?>>
	        	<?php if(is_page('o-manifesto')) { ?><span class="hover-esq"></span><?php }?>
	        	<a href="<?php bloginfo('url'); ?>/o-manifesto">O Manifesto</a>
	        	<?php if(is_page('o-manifesto')) { ?><span class="hover-dir"></span><?php } ?>
	        </li>
	        <li <?php if(in_category('noticias')) { ?>class="ativo"<?php } ?>>
	        	<?php if(in_category('noticias')) { ?><span class="hover-esq"></span><?php }?>
	        	<a href="<?php bloginfo('url'); ?>/noticias">Notícias</a>
	        	<?php if(in_category('noticias')) { ?><span class="hover-dir"></span><?php } ?>
	        </li>
	        <li <?php if(in_category('galeria')) { ?>class="ativo"<?php } ?>>
	        	<?php if(in_category('galeria')) { ?><span class="hover-esq"></span><?php }?>
	        	<a href="<?php bloginfo('url'); ?>/galeria">Galeria</a>
	        	<?php if(in_category('galeria')) { ?><span class="hover-dir"></span><?php } ?>
	        </li>
	        <li <?php if(is_page('manifestacoes')) { ?>class="ativo"<?php } ?>>
	        	<?php if(is_page('manifestacoes')) { ?><span class="hover-esq"></span><?php }?>
	        	<a href="<?php bloginfo('url'); ?>/manifestacoes">Manifestações</a>
	        	<?php if(is_page('manifestacoes')) { ?><span class="hover-dir"></span><?php } ?>
	        </li>
	        <li <?php if(is_page('relatos')) { ?>class="ativo"<?php } ?>>
	        	<?php if(is_page('relatos')) { ?><span class="hover-esq"></span><?php }?>
	        	<a href="<?php bloginfo('url'); ?>/relatos">Relatos</a>
	        	<?php if(is_page('relatos')) { ?><span class="hover-dir"></span><?php } ?>
	        </li>
	        <li <?php if(is_page('colabore')) { ?>class="ativo"<?php } ?>>
	        	<?php if(is_page('colabore')) { ?><span class="hover-esq"></span><?php }?>
	        	<a href="<?php bloginfo('url'); ?>/colabore">Colabore</a>
	        	<?php if(is_page('colabore')) { ?><span class="hover-dir"></span><?php } ?>
	        </li>
	        <li <?php if(is_page('contato')) { ?>class="ativo"<?php } ?>>
	        	<?php if(is_page('contato')) { ?><span class="hover-esq"></span><?php }?>
	        	<a href="<?php bloginfo('url'); ?>/contato">Contato</a>
	        	<?php if(is_page('contato')) { ?><span class="hover-dir"></span><?php } ?>
	        </li>
	    </ul>
    </div><!-- #menu -->
    <div style="clear:both;"></div>
	<div class="geral clearfix">    	
        <div id="conteudo">
