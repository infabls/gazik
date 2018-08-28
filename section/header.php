<!DOCTYPE html>
<html lang="ru">
<head>
  <?php 
  $path = $_SERVER['DOCUMENT_ROOT'];
  include  $path  . '/section/data_header.php'; 
 //echo $ccity . $addr . $nomber18 . $nomber28 .$request_uri[0];
  ?>
    <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/turbolinks/5.1.1/turbolinks.js"></script> -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
  <meta charset="UTF-8">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <meta name="apple-mobile-web-app-capable" content="yes">
  <link rel="shortcut icon" href="/favicon.ico" type="image/x-icon">
  <link rel="icon" href="/favicon.ico" type="image/x-icon">
  <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
  <meta name="theme-color" content="#960605">

  <meta name="robots" content="index, follow">
  <meta property="og:image" content="https://gorgaz2050.kz/img/bg.jpg">
  <meta property="og:type" content="article"> 
  <script type='application/ld+json'> 
    {
      "@context": "http://www.schema.org",
      "@type": "GasStation",
      "name": "Горгаз",
      "url": "https://gorgaz2050.kz",
      "logo": "https://gorgaz2050.kz/img/lg11.png",
      "image": "https://gorgaz2050.kz/img/bg.jpg",
      "description": "Газовая компания Горгаз предлагает услуги газообеспечения самому широкому спектру потребителей. Сеть газовых заправок, доставка газа в баллонах, заправка газгольдеров сжиженным газом - наш неполный спектр услуг.",
      "address": {
        "@type": "PostalAddress",
        "streetAddress": "Коктал 23",
        "addressLocality": "Астана",
        "addressRegion": "Акмолинская область",
        "addressCountry": "Kazakhstan"
      },
      "geo": {
        "@type": "GeoCoordinates",
        "latitude": "51.20606668",
        "longitude": "71.34979734"
      },
      "hasMap": "https://www.google.kz/maps/place/%D0%93%D0%BE%D1%80%D0%B3%D0%B0%D0%B7/@51.2043765,71.3513349,18z/data=!4m5!3m4!1s0x0:0xce75a2fb986e1e6!8m2!3d51.2042379!4d71.3510849",
      "openingHours": "Mo, Tu, We, Th, Fr, Sa, Su 08:00-20:00",
      "contactPoint": {
        "@type": "ContactPoint",
        "contactType": "Mobile",
        "telephone": "+77071810218"
      }
    }
  </script>
  <title>ТОО Горгаз 2050 - Официальный сайт</title>
  <meta name="description" content="">
  <meta name="keywords" content=""> 
  <meta property="og:title" content="">
  <meta property="og:description" content="">
  <meta property="og:image" content="https://gorgaz2050.kz/img/bg.jpg">
  <meta property="og:type" content="article">
 <link rel="stylesheet" href="/assets/css/font-awesome.min.css">
        <script src="/assets/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link rel="stylesheet" href="/assets/css/base.css">
  <link rel="stylesheet" href="/assets/css/head.css">
  <link rel="manifest" href="/manifest.json">
  <!-- =========фикс шапки при скролле=========== -->
  <script>
var h_hght = 90; // высота шапки
var h_mrg = 0;    // отступ когда шапка уже не видна

$(function(){

  var elem = $('#top_nav');
  var top = $(this).scrollTop();

  if(top > h_hght){
    elem.css('top', h_mrg);
  }           

  $(window).scroll(function(){
    top = $(this).scrollTop();

    if (top+h_mrg < h_hght) {
      elem.css('top', (h_hght-top));
    } else {
      elem.css('top', h_mrg);
    }
  });

});
</script>
<!-- =========фикс шапки при скролле=========== -->


</head>
  <body data-spy="scroll">
    <div class="wrapper" id ="wrapper" >

      <div id="mobile-fixed-menu" class="menu2">
        <div class="dropdown" style="    position: absolute;
        top: 6px;
        left: 20px;">
        <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown"> <i class="fa fa-globe" aria-hidden="true"></i>
          Выберите регион
          <span class="caret"></span>
        </button>
        <ul class="dropdown-menu" style="left: 0px">
          <li>
            <a href="/astana/">Акм. обл и Астана</a>
          </li>
          <li>
            <a href="/karaganda/">Кар. обл и Караганда</a>
          </li>
          <li>
            <a href="/pavlodar/">Павл. обл и Павлодар</a>
          </li>
          <li>
            <a href="/ust-kamenogorsk/">ВКО и Усть-Каменогорск</a>
          </li>
          <li class="divider"></li>
          <li>
            <a href="/">Нет моего города</a>
          </li>
        </ul>
      </div>
    </div>
    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar" onclick="show()">
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
    </button>




    <script >

      function show() {
        document.getElementById('myNavmenu').style.display='block'
      }

      function hide() {
        document.getElementById('myNavmenu').style.display='none'
      // body...
    }



  </script>
  <header class="menu2">

    <div class="row  hidden-xs">
      <div class="topper">
        <div class="col-md-2 col-sm-2 col-xs-2">
          <a href="index">
            <div class="topper__logo"></div>
          </a>

        </div>
        <div class="col-md-4 col-sm-3 col-xs-4">
          <div class="dropdown" style="  margin-left: 40px;  padding: 8px 0;">
            <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown"> <i class="fa fa-globe" aria-hidden="true"></i>
              Выберите регион 
              <span class="caret"></span>
            </button>
            <ul class="dropdown-menu">
              <li>
                <a href="/astana/" >Акмолинская обл. и Астана</a>
              </li>
              <li>
                <a href="/karaganda/">Карагандинская обл. и Караганда</a>
              </li>
              <li>
                <a href="/pavlodar/">Павлодарская обл. и Павлодар</a>
              </li>
              <li>
                <a href="/ust-kamenogorsk/">ВКО обл. и Усть-Каменогорск</a>
              </li>
              <li class="divider"></li>
              <li>
                <a href="/">Нет моего города</a>
              </li>
            </ul>
          </div>
        </div>
        <div class="col-md-6  col-sm-7 col-xs-6">
          <div class="topper__contact">
            <div class="topper__phone-icon"></div>
            <p> 
              <strong><a href="tel:<?=$nomber1?>"><?=$nomber1?></a>
                <br>
                <a href="tel:<?=$nomber2?>"><?=$nomber2?></a></strong> 
              </p>
            </div>
            <div class="topper__contact">
              <div class="topper__address-icon"></div>
              <div class="topper_addr"><p><strong><?=$addr?></strong></p></div>

            </div>
          </div>
        </div>

      </div>
    </div>

    <nav id="myNavmenu" class="navmenu navmenu-default navmenu-fixed-left offcanvas" role="navigation">

      <button type="button"  style="top: 55px !important; padding: 7px 13px;font-size: 20px;" class="navbar-toggle" onclick="hide()" >

        <i class="fa fa-times" aria-hidden="true"></i>
      </button>
      <ul class="nav navmenu-nav">
        <li class="active">
          <a href="/">Главная</a>
        </li>
        <li>
          <a href="avtogaz">Газовые заправки</a>
        </li>
        <li>
          <a href="ustanovka-gbo">Газобалонное оборудование</a>
        </li>
        <li>
          <a href="dostavka-gaza">Доставка газа</a>
        </li>
        <li>
          <a href="gazgolder">Газ для газгольдеров</a>
        </li>
        <li>
          <a href="/faq">Ответы на ваши вопросы</a>
        </li>
        <li class="hidden-sm hidden-md">
          <a href="/price">Цены</a>
        </li>
        <li>
          <a href="contacts">Контакты</a>
        </li>
      </ul>
    </nav>
    <nav id="top_nav" class="navbar hidden-xs" >
      <div id="navbar" class="navbar-collapse menu-collapse menu-shadow collapse in" aria-expanded="true">
        <ul class="nav navbar-nav">
          <li class="active">
            <a href="index">Главная</a>
          </li>
          <li class=" dropdown-toggle" type="button" data-toggle="dropdown">
            <a href="#">
              Услуги
              <span class="caret"></span>
            </a>
          </li>
          <ul class="dropdown-menu">
            <li>
              <a href="dostavka-gaza">Доставка газа в баллонах</a>
            </li>
            <li>
              <a href="ustanovka-gbo">Установка ГБО на авто</a>
            </li>
            <li>
              <a href="avtogaz">Газовые заправки</a>
            </li>
            <li>
              <a href="gazgolder">Сжиженный газ для газгольдеров</a>
            </li>
            <li class="divider"></li>
            <li>
              <a href="uslugi">Все услуги</a>
            </li>
          </ul>
          <li>
            <a href="avtogaz">АЗГС</a>
          </li>
          <li>
            <a href="ustanovka-gbo">ГБО</a>
          </li>
          <li>
            <a href="dostavka-gaza">Доставка газа</a>
          </li>
          <li>
            <a href="price">Цены</a>
          </li>
          <li>
            <a href="/faq">Вопросы</a>
          </li>
          <li class="hidden-sm hidden-md">
            <a href="/about">О компании</a>
          </li>
          <li>
            <a href="contacts">Контакты</a>
          </li>
        </ul>
      </div>
    </nav>
  </header>
  <!-- <script src="/assets/js/jquery.js"></script> -->
  <main id="main2" class="barba-container">

