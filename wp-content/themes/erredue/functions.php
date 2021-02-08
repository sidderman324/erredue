<?php
if(function_exists('register_nav_menus')){
	register_nav_menus(
		array( // создаём любое количество областей

		)
	);
}


// Добавление главного слайдера
add_action( 'init', 'product_industr_item' ); // Использовать функцию только внутри хука init
function product_industr_item() {
	$labels = array(
		'name' => 'Продукция индустриальная',
		'singular_name' => 'Продукция индустриальная',
		'add_new' => 'Добавить индустриальную продукцию',
		'add_new_item' => 'Добавить индустриальную продукцию',
		'edit_item' => 'Редактировать индустриальную продукцию',
		'new_item' => 'Новая индустриальная продукция',
		'all_items' => 'Вся индустриальная продукция',
		'view_item' => 'Просмотр индустриальной продукции на сайте',
		'search_items' => 'Искать индустриальную продукцию',
		'not_found' => 'Индустриальной продукции не найдено.',
		'not_found_in_trash' => 'В корзине нет индустриальной продукции.',
		'menu_name' => 'Продукция индустриальная'
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
	register_post_type( 'product_industr', $args);
}



// Добавление главного слайдера
add_action( 'init', 'product_labs_item' ); // Использовать функцию только внутри хука init
function product_labs_item() {
	$labels = array(
		'name' => 'Продукция лабораторная',
		'singular_name' => 'Продукция лабораторная',
		'add_new' => 'Добавить лабораторную продукцию',
		'add_new_item' => 'Добавить лабораторную продукцию',
		'edit_item' => 'Редактировать лабораторную продукцию',
		'new_item' => 'Новая лабораторная продукция',
		'all_items' => 'Вся лабораторная продукция',
		'view_item' => 'Просмотр лабораторной продукции на сайте',
		'search_items' => 'Искать лабораторную продукцию',
		'not_found' => 'Индустриальной продукции не найдено.',
		'not_found_in_trash' => 'В корзине нет лабораторной продукции.',
		'menu_name' => 'Продукция лабораторная'
	);
	$args = array(
		'labels' => $labels,
		'public' => true,
		'menu_icon' => 'dashicons-rest-api',
		'menu_position' => 4,
		'has_archive' => true,
		'show_in_rest' => true,
		'supports' => array( 'title', 'editor', 'thumbnail', 'excerpt')
		// 'taxonomies' => array('post_tag','category')
	);
	register_post_type( 'product_labs', $args);
}




// Добавление главного слайдера
add_action( 'init', 'application' ); // Использовать функцию только внутри хука init
function application() {
	$labels = array(
		'name' => 'Применение',
		'singular_name' => 'Применение',
		'add_new' => 'Добавить применение',
		'add_new_item' => 'Добавить применение',
		'edit_item' => 'Редактировать применение',
		'new_item' => 'Новое применение',
		'all_items' => 'Все применение',
		'view_item' => 'Просмотр применений на сайте',
		'search_items' => 'Искать применение',
		'not_found' => 'Применений не найдено',
		'not_found_in_trash' => 'В корзине нет применений',
		'menu_name' => 'Применение'
	);
	$args = array(
		'labels' => $labels,
		'public' => true,
		'menu_icon' => 'dashicons-admin-network',
		'menu_position' => 4,
		'has_archive' => true,
		'show_in_rest' => true,
		'supports' => array( 'title', 'editor', 'thumbnail', 'excerpt')
		// 'taxonomies' => array('post_tag','category')
	);
	register_post_type( 'application', $args);
}









/* Удаление пунктов меню в админке */
function remove_admin_submenu_items() {
	remove_menu_page( 'edit.php' );
	remove_menu_page( 'link-manager.php' );
	remove_menu_page( 'edit-comments.php' );
	// remove_menu_page( 'themes.php' );
	// remove_menu_page( 'plugins.php' );
	// remove_menu_page( 'users.php' );
}
add_action( 'admin_menu', 'remove_admin_submenu_items');

?>