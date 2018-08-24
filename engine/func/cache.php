<?php 


function del_cachefile($cachefile)
{
	unlink($cachefile);
}
function clean_cache()
{
	if (file_exists('./cache'))
foreach (glob('./cache/*') as $file)
unlink($file);
}

function check_cache()
{

$url = $_SERVER["REQUEST_URI"];
$break = Explode('/', $url);
$file = $break[count($break) - 1];
$cachefile = 'cache/cached-'.substr_replace($file ,"",-4).'.html';
$cachetime = 18000;

// Обслуживается из файла кеша, если время запроса меньше $cachetime
if (file_exists($cachefile) && time() - $cachetime < filemtime($cachefile)) {
    echo "<!-- Cached copy, generated ".date('H:i', filemtime($cachefile))." -->\n";
    include($cachefile);
    exit;
}
ob_start(); // Запуск буфера вывода
	
}

function create_cache()
{
	// Кешируем содержание в файл
$url = $_SERVER["REQUEST_URI"];	
$break = Explode('/', $url);
$file = $break[count($break) - 1];
$cachefile = 'cache/cached-'.substr_replace($file ,"",-4).'.html';
$cached = fopen($cachefile, 'w');

fwrite($cached, ob_get_contents());

fclose($cached);

ob_end_flush(); // Отправялем вывод в браузер
}






