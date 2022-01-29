<?php

require_once(__DIR__ . '/vendor/autoload.php');

use SME\Modules\Cacher;

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
