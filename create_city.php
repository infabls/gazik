<?php 

function create_city_folder()
{
	$city[0] = 'astana/';
	$city[1] = 'karaganda/';
	$city[2] = 'pavlodar/';
	$city[3] = 'ust-kamenogorsk/';

	for ($i=0; $i < 4 ; $i++) { 
		if (!mkdir($city[$i], 0777, true)) {
			die('Директории уже созданы');
		}
	}
}
	$city[0] = 'astana/';
	$city[1] = 'karaganda/';
	$city[2] = 'pavlodar/';
	$city[3] = 'ust-kamenogorsk/';
function clean($city)
{
	for ($i=0; $i < 4 ; $i++) { 
		if (!rmdir($city[$i])) {
			die('Директории уже удалены');
		}
	}

}
	$page[0] = 'avtogaz.php';
	$page[1] = 'price.php';
	$page[2] = 'dostavka-gaza.php';
	$page[3] = 'gazgolder.php';
	$page[4] = 'index.php';
	$page[5] = 'ustanovka-gbo.php';
	$page[6] = 'uslugi.php';


for ($i=0; $i < 7; $i++) { 
copy($page[$i], $city[0] . $page[$i] );
}
for ($i=0; $i < 7; $i++) { 
copy($page[$i], $city[1] . $page[$i] );
}
for ($i=0; $i < 7; $i++) { 
copy($page[$i], $city[2] . $page[$i] );
}
for ($i=0; $i < 7; $i++) { 
copy($page[$i], $city[3] . $page[$i] );
}