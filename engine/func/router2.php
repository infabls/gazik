<?php 
/**
* 
*/
class Router
{


public	function start(){
global $url, $chunk;
$url = clean_data($_SERVER['REQUEST_URI']);
$chunk = explode('/', $url);
$routes = Array
(
    (0) => Array
        (
            (uid) => '100',
            (view) => 'Sandra Shush',
            (url) => 'urlof100'
        ),

    (1) => Array
        (
            (uid) => '5465',
            (view) => 'Stefanie Mcmohn',
            (pic_square) => 'urlof100'
        ),

    (2) => Array
        (
            (uid) => '40489',
            (view) => 'Michael',
            (pic_square) => 'urlof40489'
        )
);
$key = array_search(100, array_column($routes, 'uid'));
$view = $routes[$key]['view'];
echo "$view <br>";
Router::Checkcity($chunk);
}



public function Checkcity($chunk)
{
	switch ($chunk[1]) {
		case 'value':
			echo "val";
			break;
		
		default:
			# code...
			break;
	}
}


}
