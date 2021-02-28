<?php
if(function_exists('register_nav_menus')){
	register_nav_menus(
		array( // создаём любое количество областей

		)
	);
}





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





add_action( 'init', 'reference' ); // Использовать функцию только внутри хука init
function reference() {
	$labels = array(
		'name' => 'Упоминания',
		'singular_name' => 'Упоминания',
		'add_new' => 'Добавить упоминание',
		'add_new_item' => 'Добавить упоминание',
		'edit_item' => 'Редактировать упоминание',
		'new_item' => 'Новое упоминание',
		'all_items' => 'Все упоминания',
		'view_item' => 'Просмотр упоминаний на сайте',
		'search_items' => 'Искать упоминания',
		'not_found' => 'Упоминаний не найдено',
		'not_found_in_trash' => 'В корзине нет упоминаний',
		'menu_name' => 'Упоминания'
	);
	$args = array(
		'labels' => $labels,
		'public' => true,
		'menu_icon' => 'dashicons-format-aside',
		'menu_position' => 4,
		'has_archive' => true,
		'show_in_rest' => true,
		'supports' => array( 'title', 'editor', 'thumbnail', 'excerpt')
		// 'taxonomies' => array('post_tag','category')
	);
	register_post_type( 'reference', $args);
}




add_action( 'init', 'certificats' ); // Использовать функцию только внутри хука init
function certificats() {
	$labels = array(
		'name' => 'Сертификаты',
		'singular_name' => 'Сертификаты',
		'add_new' => 'Добавить сертификат',
		'add_new_item' => 'Добавить сертификат',
		'edit_item' => 'Редактировать сертификат',
		'new_item' => 'Новое сертификат',
		'all_items' => 'Все сертификаты',
		'view_item' => 'Просмотр сертификатов на сайте',
		'search_items' => 'Искать сертификаты',
		'not_found' => 'Сертификатов не найдено',
		'not_found_in_trash' => 'В корзине нет сертификатов',
		'menu_name' => 'Сертификаты'
	);
	$args = array(
		'labels' => $labels,
		'public' => true,
		'menu_icon' => 'dashicons-awards',
		'menu_position' => 4,
		'has_archive' => true,
		'show_in_rest' => true,
		'supports' => array( 'title', 'editor', 'thumbnail', 'excerpt')
		// 'taxonomies' => array('post_tag','category')
	);
	register_post_type( 'certificats', $args);
}










// CASES

add_action( 'init', 'case_industrial_item' ); // Использовать функцию только внутри хука init
function case_industrial_item() {
	$labels = array(
		'name' => 'Кейсы индустриальные',
		'singular_name' => 'Кейс индустриальный',
		'add_new' => 'Добавить индустриальный кейс',
		'add_new_item' => 'Добавить индустриальный кейс',
		'edit_item' => 'Редактировать индустриальный кейс',
		'new_item' => 'Новый индустриальный кейс',
		'all_items' => 'Все индустриальные кейсы',
		'view_item' => 'Просмотр индустриальных кейсов на сайте',
		'search_items' => 'Искать индустриальный кейс',
		'not_found' => 'Индустриальных кейсов не найдено.',
		'not_found_in_trash' => 'В корзине нет индустриальных кейсов.',
		'menu_name' => 'Кейсы индустриальные'
	);
	$args = array(
		'labels' => $labels,
		'public' => true,
		'menu_icon' => 'dashicons-block-default',
		'menu_position' => 4,
		'has_archive' => true,
		'show_in_rest' => true,
		'supports' => array( 'title', 'editor', 'thumbnail', 'excerpt')
		// 'taxonomies' => array('post_tag','category')
	);
	register_post_type( 'case_industrial', $args);
}




add_action( 'init', 'case_labs_item' ); // Использовать функцию только внутри хука init
function case_labs_item() {
	$labels = array(
		'name' => 'Кейсы лабораторные',
		'singular_name' => 'Кейс лабораторный',
		'add_new' => 'Добавить лабораторный кейс',
		'add_new_item' => 'Добавить лабораторный кейс',
		'edit_item' => 'Редактировать лабораторный кейс',
		'new_item' => 'Новый лабораторный кейс',
		'all_items' => 'Все лабораторные кейсы',
		'view_item' => 'Просмотр лабораторных кейсов на сайте',
		'search_items' => 'Искать лабораторный кейс',
		'not_found' => 'Индустриальных кейсов не найдено.',
		'not_found_in_trash' => 'В корзине нет лабораторных кейсов.',
		'menu_name' => 'Кейсы лабораторные'
	);
	$args = array(
		'labels' => $labels,
		'public' => true,
		'menu_icon' => 'dashicons-block-default',
		'menu_position' => 4,
		'has_archive' => true,
		'show_in_rest' => true,
		'supports' => array( 'title', 'editor', 'thumbnail', 'excerpt')
		// 'taxonomies' => array('post_tag','category')
	);
	register_post_type( 'case_labs', $args);
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
