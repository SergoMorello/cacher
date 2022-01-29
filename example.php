<?php

require_once(__DIR__ . '/cacheClass.php');

cache::setDir(__DIR__.'/.cache/');

cache::put('string', 'Cтрока', 20);

cache::put('array', [
	'array' => 'Массив'
]);

if (cache::has('string')) {
	echo "<pre>";
	echo cache::get('string');
	echo "</pre>";
}

if (cache::has('array')) {
	echo "<pre>";
	print_r(cache::get('array'));
	echo "</pre>";
}
