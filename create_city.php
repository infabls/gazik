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
	$page[1] = 'contacts.php';
	$page[2] = 'dostavka-gaza.php';
	$page[3] = 'gazgolder.php';
	$page[4] = 'index.php';
	$page[5] = 'ustanovka-gbo.php';
	$page[6] = 'uslugi.php';
	$page[7] = 'price.php';

copy($page[0], $city[0] . $page[0] );

for ($i=0; $i < 7; $i++) { 
copy($page[$i], $city[0] . $page[$i] );
}