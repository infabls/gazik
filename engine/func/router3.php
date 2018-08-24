<?php 

function Router_start($value='')
{
	$url = clean_data($_SERVER['REQUEST_URI']);
	$content = explode('/', $url);

/*
astana
pavlodar
karaganda
ust-kamenogorsk
/about
/avtogaz
/contacts
/dostavka-gaza
/faq
/gazgolder
/price
/uslugi
/ustanovka-gbo

без php 
без слеша, кроме городов
без гет параметров
без дублирования
без городов только абоут и фак

есть ли файл
*/


	if (isset($content[2])) {

	}
	switch ($content[1]) {
		case 'astana':
			echo "string";
			break;
		
		default:
			# code...
			break;
	}

if (isset($content[2])) {
	if (file_exists('../app/views/pages/'.$content[2]. '.php')) {
		$txt = '../app/views/pages/'.$content[2]. '.php';
		generate($ptviews,$txt);
		
	} else echo "404";
}
elseif (empty($content[2])) {
	if (file_exists('../app/views/pages/'.$content[1]. '.php')) {
		$txt = '../app/views/pages/'.$content[1]. '.php';
		generate($ptviews,$txt);
	} else echo "404";
} 

}