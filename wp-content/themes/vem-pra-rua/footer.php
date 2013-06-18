<?php
/**
 * @package WordPress
 * @subpackage ANCBR
 * @since ANCBR 1.0
 */
?>
        </div><!-- #conteudo -->
	</div><!-- .geral -->
</div><!-- #main -->
<div id="rodape">
	<div id="cont-rodape">
        <img src="<?php bloginfo('template_url'); ?>/img/logo-rodape.png" height="48" width="50" alt="Vem Pra Rua">    	
    	<ul>
    		<li><a href="<?php bloginfo('url'); ?>">Home</a></li>
    		<li><a href="<?php bloginfo('url'); ?>/sobre">Sobre</a></li>
    		<li><a href="<?php bloginfo('url'); ?>/o-manifesto">O Manifesto</a></li>
    		<li><a href="<?php bloginfo('url'); ?>/noticias">Notícias</a></li>
            <li><a href="<?php bloginfo('url'); ?>/galeria">Galeria</a></li>
            <li><a href="<?php bloginfo('url'); ?>/manifestacoes">Manifestações</a></li>
            <li><a href="<?php bloginfo('url'); ?>/relatos">Relatos</a></li>
    		<li><a href="<?php bloginfo('url'); ?>/colabore">Colabore</a></li>
            <li><a href="<?php bloginfo('url'); ?>/contato">Contato</a></li>
    	</ul>
    </div><!-- #cont-rodape -->
</div><!-- #rodape -->
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/compact.js"></script>
<script type="text/javascript">
$(".ativo").next('li').children().css('border', 'none');
</script>
</body>
</html>
<?php wp_footer(); ?>
</body>
</html>