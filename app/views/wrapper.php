<!DOCTYPE html>
<html lang="ru">
<head>
  <?php 
  include '../config/path.php';
  include  '/section/data_header.php'; 
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
 <link rel="stylesheet" href="<?php echo $ptassets ?>css/font-awesome.min.css">
        <script src="<?php echo $ptassets ?>js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link rel="stylesheet" href="<?php echo $ptassets ?>css/base.css">
  <link rel="stylesheet" href="<?php echo $ptassets ?>css/head.css">
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
    <div class="wrapper" id ="barba-wrapper" >

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
  <!-- <script src="<?php echo $ptassets ?>js/jquery.js"></script> -->
  <main id="main2" class="barba-container">


    <?php 
   $pagename =  'pages/' . $page . '.php';
   if (!file_exists(dirname(__FILE__) . $pagename)) {
     include $pagename;
   } else {echo $pagename; exit();}
    ?>

  </main>
  <footer class="menu2">
    <style>
      footer h2 {font-size: 30px; margin-bottom: 10px; margin-top: 20px;}
      footer a {    font-size: 19px;
        margin-bottom: 5px;
        display: inline-block;}
        .totop {
          color: white;
          top: -15px;
          margin-left: -15px;
          position: absolute;
          background-color: rgba(39, 255, 96, 0.66);
          border-radius: 50%;
          padding: 9px;
          box-shadow: 0px 0px 7px 1px rgba(0, 0, 0, 0.35);
        }
        footer {
          text-align: center;
          width: 100%; 
          background-color: #2d2d2d; 
          min-height: 200px;}
          .smm {
            width: 20%;
            float: left;
          }
          .smm img {border-radius: 3px}
          footer h2,footer h3 {color: #FFF}
          .hr {display: inline-block;
            width: 80%;
            color: #821515;
            border-color: #0da2a2;
            border-bottom-width: 2px;}

            .bg-s {width: 48px; height: 48px; border-radius: 3px; }
            .bg-fb {background: url('<?php echo $ptassets ?>/img/social/css_sprites.png') -5px -5px;}
            .bg-gp {background: url('<?php echo $ptassets ?>/img/social/css_sprites.png') -63px -5px;}
            .bg-in {background: url('<?php echo $ptassets ?>/img/social/css_sprites.png') -121px -5px;}
            .bg-ok {background: url('<?php echo $ptassets ?>/img/social/css_sprites.png') -179px -5px;}
            .bg-vk {background: url('<?php echo $ptassets ?>/img/social/css_sprites.png') -237px -5px;}
          </style>
          <div class="container">
            <div class="row">
              <div class="col-md-4 col-sm-12 col-xs-12">
                <h2>Клиентам</h2>
                <a href="uslugi">Услуги</a>
                <br>
                <a href="contacts">Контакты</a>
                <br>
                <a href="/faq">Вопросы и ответы</a>
                <br>
                <a href="price">Цены</a>
                <br>
                <a rel="nofollow external" target="_blank" href="https://blog.gorgaz2050.kz">Полезная информация</a>
                <br></div>
                <div class="col-md-4 col-sm-12 col-xs-12" style="text-align: -webkit-center;">

                  <h2>Мы в Соц сетях</h2>
                  <div class="smm"><a href="https://vk.com/gorgaz2050" target="_blank" rel="external nofollow"><div class="bg-s bg-vk"></div></a></div>
                  <div class="smm"><a href="https://www.facebook.com/gorgaz2050" target="_blank" rel="external nofollow"><div class="bg-s bg-fb"></div></a></div>
                  <div class="smm"><a href="https://www.instagram.com/gorgaz2050/" target="_blank" rel="external nofollow"><div class="bg-s bg-in"></div></a></div>
                  <div class="smm"><a href="https://ok.ru/gorgaz2050" target="_blank" rel="external nofollow"><div class="bg-s bg-ok"></div></a></div>
                  <div class="smm"><a href="https://plus.google.com/b/100849713321869367498/100849713321869367498" target="_blank" rel="external nofollow"><div class="bg-s bg-gp"></div></a></div>
                  <a href="tel:+77071810218">
                  Call-центр работает с 8:00 до 18:00 ежедневно +7 (707) 181 02 18</a>
                  <br><a href="tel:+77762889919">Заказы по телефону +7 (776) 288 99 19</a>
                </div>


                <div class="col-md-4 col-sm-12 col-xs-12">
                  <h2>Выберите город</h2>
                  <a href="/astana/">Астана</a>
                  <br>
                  <a href="/karaganda/">Караганда</a>
                  <br>
                  <a href="/pavlodar/">Павлодар</a>
                  <br>
                  <a href="/ust-kamenogorsk/">Усть-Каменогорск</a>
                  <br>
                </div>
              </div>
            </div>
            <hr class="hr">
            <div class="copy" style="    color: white;
            padding-bottom: 30px;
            font-size: 16px;">
            <div class="row">All rights reserved. ТОО "Горгаз2050.kz"</div> <div style="padding-top: 20px;"><a href="https://infabls.com" target="_blank">Разработка и поддержка сайта - Infabls.com</a></div>
          </div>
        </footer>

      <!-- ============google-analytics============== -->
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
    (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
    m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');
  ga('create', 'UA-101055933-3', 'auto');
  ga('send', 'pageview');
</script>
<!-- ============google-analytics============== -->
<!-- Yandex.Metrika counter -->
<script type="text/javascript" >
  (function (d, w, c) {
    (w[c] = w[c] || []).push(function() {
      try {
        w.yaCounter46092129 = new Ya.Metrika({
          id:46092129,
          clickmap:true,
          trackLinks:true,
          accurateTrackBounce:true
        });
      } catch(e) { }
    });
    var n = d.getElementsByTagName("script")[0],
    s = d.createElement("script"),
    f = function () { n.parentNode.insertBefore(s, n); };
    s.type = "text/javascript";
    s.async = true;
    s.src = "https://mc.yandex.ru/metrika/watch.js";

    if (w.opera == "[object Opera]") {
      d.addEventListener("DOMContentLoaded", f, false);
    } else { f(); }
  })(document, window, "yandex_metrika_callbacks");
</script>
<noscript><div><img src="https://mc.yandex.ru/watch/46092129" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
<!-- /Yandex.Metrika counter -->
<!-- BEGIN JIVOSITE CODE {literal} -->
<script type='text/javascript'>
  (function(){ var widget_id = '3hs0JtXnPj';var d=document;var w=window;function l(){
  var s = document.createElement('script'); s.type = 'text/javascript'; s.async = true; s.src = '//code.jivosite.com/script/widget/'+widget_id; var ss = document.getElementsByTagName('script')[0]; ss.parentNode.insertBefore(s, ss);}if(d.readyState=='complete'){l();}else{if(w.attachEvent){w.attachEvent('onload',l);}else{w.addEventListener('load',l,false);}}})();</script>
  <!-- {/literal} END JIVOSITE CODE -->
      </div>
     <!--  <script src="https://cdnjs.cloudflare.com/ajax/libs/smoothState.js/0.7.2/jquery.smoothState.min.js"></script>
      <script>
        $(function(){
          'use strict';
          var $page = $('#wrapper'),
          options = {
            debug: true,
            prefetch: true,
            cacheLength: 5,
            onStart: {
          duration: 250, // Duration of our animation
          render: function ($container) {
            // Add your CSS animation reversing class
            $container.addClass('is-exiting');
            // Restart your animation
            smoothState.restartCSSAnimations();
          }
        },
        onReady: {
          duration: 0,
          render: function ($container, $newContent) {
            // Remove your CSS animation reversing class
            $container.removeClass('is-exiting');
            // Inject the new content
            $container.html($newContent);
          }
        }
      },
      smoothState = $page.smoothState(options).data('smoothState');
    });
  </script> -->


</body>
</html>