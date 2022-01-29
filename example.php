<?php

require_once(__DIR__ . '/Cacher.php');

Cacher::setDir(__DIR__.'/.cache/');

Cacher::put('string', 'Cтрока', 20);

Cacher::put('array', [
	'array' => 'Массив'
]);

if (Cacher::has('string')) {
	echo "<pre>";
	echo Cacher::get('string');
	echo "</pre>";
}

if (Cacher::has('array')) {
	echo "<pre>";
	print_r(Cacher::get('array'));
	echo "</pre>";
}
