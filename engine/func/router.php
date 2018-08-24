<?php 
function router_start()
{

global $content, $url, $txt; 
$url = $_SERVER['REQUEST_URI'];
$content = explode('/', $url);

// главная страница
if (empty($content[1])){
	$txt = '../app/views/pages/index.php';
	generate($ptviews, $txt);
	exit;
}

// главная страница городов
if (($content[1] == 'astana' || $content[1] == 'pavlodar'|| $content[1] == 'karaganda'|| $content[1] == 'ust-kamenogorsk') && empty($content[2])) {
	$txt = '../app/views/pages/index.php';
		generate($ptviews, $txt);
	exit;
}


//определение страницы
if (isset($content[2]) && ($content[1] == 'astana' || $content[1] == 'pavlodar'|| $content[1] == 'karaganda'|| $content[1] == 'ust-kamenogorsk')) {
	if (file_exists('../app/views/pages/'.$content[2]. '.php')) {
		$txt = '/../../app/views/pages/'.$content[2]. '.php';
		
	} else error404();
}
elseif (empty($content[2])) {
	if (file_exists('../app/views/pages/'.$content[1]. '.php')) {
		$txt = '../app/views/pages/'.$content[1]. '.php';
	} else error404();
} 
generate($ptviews,$txt);
}

function error404()
{
	include '404.php';
	exit;
}