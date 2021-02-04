<?php
if(function_exists('register_nav_menus')){
	register_nav_menus(
		array( // создаём любое количество областей
		  'main_menu' => 'Главное меню', // 'имя' => 'описание'
		  'foot_menu' => 'Меню в футере'
		)
	);
}

?>