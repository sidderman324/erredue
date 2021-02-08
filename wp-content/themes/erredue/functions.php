<?php
if(function_exists('register_nav_menus')){
	register_nav_menus(
		array( // создаём любое количество областей
		  'main_menu' => 'Главное меню', // 'имя' => 'описание'
		  'foot_menu' => 'Меню в футере'
		)
	);
}


// Добавление главного слайдера
add_action( 'init', 'product_item' ); // Использовать функцию только внутри хука init
function product_item() {
	$labels = array(
		'name' => 'Продукция',
		'singular_name' => 'Продукция',
		'add_new' => 'Добавить продукцию',
		'add_new_item' => 'Добавить продукцию',
		'edit_item' => 'Редактировать продукцию',
		'new_item' => 'Новая продукция',
		'all_items' => 'Вся продукция',
		'view_item' => 'Просмотр продукции на сайте',
		'search_items' => 'Искать продукцию',
		'not_found' => 'Продукции не найдено.',
		'not_found_in_trash' => 'В корзине нет продукции.',
		'menu_name' => 'Продукция'
	);
	$args = array(
		'labels' => $labels,
		'public' => true,
		'menu_icon' => 'dashicons-hammer',
		'menu_position' => 4,
		'has_archive' => true,
		'show_in_rest' => true,
		'supports' => array( 'title', 'editor', 'thumbnail', 'excerpt')
		// 'taxonomies' => array('post_tag','category')
	);
	register_post_type( 'production', $args);
}

?>