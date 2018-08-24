<style>
	.nav-tabs { border-bottom: 2px solid #DDD; }
    .nav-tabs > li.active > a, .nav-tabs > li.active > a:focus, .nav-tabs > li.active > a:hover { border-width: 0; }
    .nav-tabs > li > a { border: none; color: #666; font-size: 26px;}
    .nav-tabs > li.active > a, .nav-tabs > li > a:hover { border: none; color: #4285F4 !important; background: transparent; }
     .nav-tabs > li > a::after { content: ""; background: #4285F4; height: 2px; position: absolute; width: 100%; left: 0px; bottom: -1px; transition: all 250ms ease 0s; transform: scale(0); }
    .nav-tabs > li.active > a::after, .nav-tabs > li:hover > a::after { transform: scale(1); }
	.tab-nav > li > a::after { background: #21527d none repeat scroll 0% 0%; color: #fff; }
	.tab-pane { padding: 15px 0; }
	.tab-content{padding:0 10px }

.card {background: #FFF none repeat scroll 0% 0%; box-shadow: 0px 1px 3px rgba(0, 0, 0, 0.3); margin-bottom: 30px; }
</style>
<div class="text-center"><h1>Цены на услуги Горгаз </h1>
<p>Для просмора цен выберите город</p></div>


  <ul class="nav nav-tabs nav-justified">
<!--     <li ><a data-toggle="tab" href="#home">Все цены</a></li> -->
    <li class="active"><a data-toggle="tab" href="#menu1">Астана</a></li>
    <li><a data-toggle="tab" href="#menu2">Караганда</a></li>
    <li><a data-toggle="tab" href="#menu3">Павлодар</a></li>
    <li><a data-toggle="tab" href="#menu4">Усть-Каменогорск</a></li>
  </ul>

  <div class="tab-content">
<!--     <div id="home" class="tab-pane fade">
      <h3>Все цены</h3>
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
    </div> -->
    <div id="menu1" class="tab-pane fade in active">
      <?php $city=0;require('data_contact_and_price.php'); require '/../section/pricecard.php'; ?>
    </div>
    <div id="menu2" class="tab-pane fade">
     <?php $city=1;require('data_contact_and_price.php'); require '/../section/pricecard.php'; ?>
    </div>
    <div id="menu3" class="tab-pane fade">
     <?php $city=2;require('data_contact_and_price.php'); require '/../section/pricecard.php'; ?>
    </div>
     <div id="menu4" class="tab-pane fade">
     <?php $city=3;require('data_contact_and_price.php'); require '/../section/pricecard.php'; ?>
    </div>
</div>
<section id="form_price">
	<div class="container">
		<div class="card-w text-center">
			<h2>Как формируются цены?</h2>
			<p>В формировании цены принимают участие 5 объектов: Нефтедобывающие компании, Нефтеперерабатывающие предприятия, Государственный орган, Службы реализаии газа населению и конечные потребители</p>
		</div>
	</div>
</section>