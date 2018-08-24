<?php 

global $ptviews;
$host = $_SERVER['HTTP_HOST'];
$ptviews = $host . '/app/views/';
$ptimage = $host . '/public_html/assets/img/';
$ptassets = '/assets/';
$fullurl = 'http://'. $host . $url;