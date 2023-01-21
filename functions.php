<?php

add_action( 'wp_enqueue_scripts', function() 
{				// Потключение стилей и скриптов
	
	wp_enqueue_style( 'style', get_stylesheet_uri() );

	wp_enqueue_script( 'script', get_template_directory_uri() . '/assets/js/main.min.js', null, true );

}, 3);



add_theme_support( 'post-thumbnails' );
add_theme_support( 'title-tag' );
add_theme_support( 'custom-logo' );
add_theme_support( 'custom-background' );








add_action('after_setup_theme', function() // Регистрация меню
{			
	register_nav_menu( 'top', 'Верхнее меню' );
}, 4);
 
add_action('my_action', function() 
{
	echo 'Свой хук для WordPress';


	/* Вызывается черз  <?php do_action("my_action")?> */ 
});


add_shortcode( 'my_shortcode', function ( $tts ) 
{
	echo 'Шорткоды можно выводить в любом месте сайта даже в постах';
});



add_filter( 'upload_mimes', 'svg_upload_allow' );

# Добавляет SVG в список разрешенных для загрузки файлов.
function svg_upload_allow( $mimes ) {
	$mimes['svg']  = 'image/svg+xml';

	return $mimes;
}

add_filter( 'wp_check_filetype_and_ext', 'fix_svg_mime_type', 10, 5 );

# Исправление MIME типа для SVG файлов.
function fix_svg_mime_type( $data, $file, $filename, $mimes, $real_mime = '' ){

	// WP 5.1 +
	if( version_compare( $GLOBALS['wp_version'], '5.1.0', '>=' ) ){
		$dosvg = in_array( $real_mime, [ 'image/svg', 'image/svg+xml' ] );
	}
	else {
		$dosvg = ( '.svg' === strtolower( substr( $filename, -4 ) ) );
	}

	// mime тип был обнулен, поправим его
	// а также проверим право пользователя
	if( $dosvg ){

		// разрешим
		if( current_user_can('manage_options') ){

			$data['ext']  = 'svg';
			$data['type'] = 'image/svg+xml';
		}
		// запретим
		else {
			$data['ext']  = false;
			$data['type'] = false;
		}

	}

	return $data;
}


add_filter( 'wp_prepare_attachment_for_js', 'show_svg_in_media_library' );

# Формирует данные для отображения SVG как изображения в медиабиблиотеке.
function show_svg_in_media_library( $response ) {

	if ( $response['mime'] === 'image/svg+xml' ) {

		// С выводом названия файла
		$response['image'] = [
			'src' => $response['url'],
		];
	}

	return $response;
}









