<?php

	// Configurações básicas do tema
  add_theme_support('custom-logo');
  add_theme_support('post-thumbnails');

  // Tamanhos de imagens personalizados
	add_image_size('highlight', 780, 340, true);
	add_image_size('large_thumb', 460, 230, true);
	add_image_size('small_thumb', 160, 160, true);

  // Adicionando estilos e scripts específicos do tema
  function tk_custom_css(){
		// Estilos
		wp_register_style('main', get_template_directory_uri() . '/static/styles/main.min.css');

		wp_enqueue_style('main');
	}

	function tk_custom_js(){
		wp_register_script('main', get_template_directory_uri() . '/static/scripts/main.min.js');

		wp_enqueue_script('jquery');
		wp_enqueue_script('main');
	}

	add_action('wp_enqueue_scripts','tk_custom_css');
  add_action('wp_enqueue_scripts','tk_custom_js');

  // Adicionando async defer no js principal
  function tk_defer_scripts( $tag, $handle, $src ) {
    $defer = ['fontawesome', 'main'];

    if (in_array($handle, $defer)) {
       return '<script src="' . $src . '" async defer crossorigin="anonymous"></script>' . "\n";
    }

    return $tag;
  }
  add_filter('script_loader_tag', 'tk_defer_scripts', 10, 3);

  // Removendo width e height do thumbnail
  add_filter( 'post_thumbnail_html', 'remove_thumbnail_dimensions', 10, 3 );
  function remove_thumbnail_dimensions( $html, $post_id, $post_image_id ) {
      $html = preg_replace( '/(width|height)=\"\d*\"\s/', "", $html );
      return $html;
  }

	// Oculta a Admin Bar
	add_filter('show_admin_bar', '__return_false');

	// Importa as customizações
	require get_template_directory() . '/includes/customizer.php';

	// **** MENUS
	register_nav_menus([
    'main_nav'  => __('Menu principal'),
    'method_nav'  => __('Menu do Método TK (rodapé)'),
    'content_nav'  => __('Menu de conteúdos (rodapé)'),
  ]);

?>
