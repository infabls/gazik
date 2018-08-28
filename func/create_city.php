<?php 

function create_city_folder()
{
	$city[0] = '../astana/';
	$city[1] = '../karaganda/';
	$city[2] = '../pavlodar/';
	$city[3] = '../ust-kamenogorsk/';

	for ($i=0; $i < 4 ; $i++) { 
		if (!mkdir($city[$i], 0777, true)) {
			die('Директории уже созданы');
		}
	}
}
	$city[0] = '../astana/';
	$city[1] = '../karaganda/';
	$city[2] = '../pavlodar/';
	$city[3] = '../ust-kamenogorsk/';
function clean($city)
{
	for ($i=0; $i < 4 ; $i++) { 
		if (!rmdir($city[$i])) {
			die('Директории уже удалены');
		}
	}

}
	$page[0] = '../avtogaz.php';
	$page[1] = '../contacts.php';
	$page[2] = '../dostavka-gaza.php';
	$page[3] = '../gazgolder.php';
	$page[4] = '../index.php';
	$page[5] = '../ustanovka-gbo.php';
	$page[6] = '../uslugi.php';
	$page[7] = '../price.php';

// 	function copy_pages($page_name)
// 	{
// 		for ($i=0; $i < 4 ; $i++) { 
// 			if (!copy($page_name, $city[i])) {
// 				echo "не удалось скопировать $page_name...\n";
// 			}
// 		}

// 	}
// // clean();
// // create_city_folder();
// 	$page_length = count($page);
// 	for ($i=0; $i < $page_length; $i++) { 
// 		copy_pages($page[$i]);
// 	}


// copy($page[0], $city[0] . substr_replace($page[0], 0, 3));
	copy('../avtogaz.php', '../astana/avtogaz.php');
var_dump($page);
var_dump($city);


// ...
 ?>