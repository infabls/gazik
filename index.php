<?php 

 session_start();
 echo "string2";
 // require_once '/../engine/loader.php';


// generate($ptviews,$txt);
function generate($ptviews, $txt, $template_view='wrapper.php', $data = null)
	{
		global $txt, $ptviews;
		/*
		динамически подключаем общий шаблон (вид),
		внутри которого будет встраиваться вид
		для отображения контента конкретной страницы.
		*/
		include '../app/views/wrapper.php';
	}





