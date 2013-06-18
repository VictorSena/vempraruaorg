<?php
// Miniaturas 
add_theme_support( 'post-thumbnails' );
	add_image_size( 'thumb_n3' , 300, 140, true ); 
	add_image_size( 'thumb_n4' , 142, 110, true ); 

// Campo Personalizado
function campoPersonalizado($campo) {
	$informacao_campo = get_post_custom_values($campo);
	echo $informacao_campo[0];
}

// Delimita caracteres do título
function titulo($tamanhoTitulo) {
	$titulo = get_the_title();
	$conta_caracteres_titulo = strlen($titulo);
	if ($conta_caracteres_titulo > $tamanhoTitulo) {
	echo substr(the_title($before = '', $after = '', FALSE), 0, $tamanhoTitulo) . '...'; } else {
		the_title();
	}
}

// // Delimita tamanho do resumo
// function resumo($tamanhoResumo) {
// 	$excerpt = get_the_excerpt();
// 	$tagP = array ("<p>", "</ p>");
// 	$excerpt = str_replace ($tagP, "", $excerpt);
// 	$conta_caracteres_resumo = strlen($excerpt);
// 	if ($conta_caracteres_resumo > $tamanhoResumo) {
// 	echo substr(get_the_excerpt($before = '', $after = '', FALSE), 0, $tamanhoResumo) . '...'; } else {
// 		echo $excerpt;
// 	}
// }

// Remover Versão Wordpress
function wpbeginner_remove_version() {
return '';
}
add_filter('the_generator', 'wpbeginner_remove_version');

// Remove Arquivos Head
remove_action('wp_head', 'rsd_link');
remove_action('wp_head', 'wlwmanifest_link');
remove_action('wp_head', 'feed_links', 2);
remove_action('wp_head','feed_links_extra', 3);
remove_action('wp_head', 'index_rel_link');
remove_action('wp_head', 'parent_post_rel_link');
remove_action('wp_head', 'start_post_rel_link');
remove_action('wp_head', 'adjacent_posts_rel_link_wp_head');
remove_action('wp_head', 'rel_canonical');
remove_action( 'wp_head', 'wp_shortlink_wp_head', 10, 0 );

// Adiciona logo login Wodpress
function my_custom_login_logo() {
    echo '<style type="text/css">
        h1 a { background-image:url('.get_bloginfo('template_directory').'/img/logo-login.png) !important; }
    </style>';
}
add_action('login_head', 'my_custom_login_logo');
	
// Mudar o logo admin Bar
function fb_new_adminbar_logo_img() {
echo'<style type="text/css">
#wp-admin-bar-wp-logo2 > .ab-item, #wp-admin-bar-wp-logo2 > .ab-item:hover {
background-image:url('.get_bloginfo('template_directory').'/img/logo-admin-bar.png) !important;background-repeat:no-repeat;background-position:center center;}
</style>';
}
add_action('admin_head', 'fb_new_adminbar_logo_img');
if(is_user_logged_in()) {
add_action('wp_head', 'fb_new_adminbar_logo_img');
}

// Remove link admin bar
function fb_remove_oldlogo_adminbar() {
global $wp_admin_bar;
$wp_admin_bar->remove_menu('wp-logo');
}
add_action('wp_before_admin_bar_render', 'fb_remove_oldlogo_adminbar');

// Adiciona novo link admin bar
function fb_new_adminbar_logo_link() {
global $wp_admin_bar;
$blog_link = get_bloginfo('url');
if (!is_super_admin() || !is_admin_bar_showing()) {
return;
}
$wp_admin_bar->add_menu(array(
'id' => 'wp-logo2',
'href' => $blog_link,
'title' => '<span></span>',
));
}
add_action('admin_bar_menu', 'fb_new_adminbar_logo_link',11);

// Rodapé Wordpress
function remove_footer_admin () {
echo '<a href="http://www.vemprarua.org" target="_blank">Vem Pra Rua</a>';
}

add_filter('admin_footer_text', 'remove_footer_admin');

