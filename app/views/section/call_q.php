
<section id="order_call">
	<div class="row">
		<div class="col-md-3"></div>
		<div class="col-md-6">
			<div class="order_call-text"><p>У Вас остались вопросы?</p></div>
			<div class="order_call-text"><p>Задайте их нашему специалисту!</p></div>
			<div class="order_call_mc-btn">
				<!-- <input class="order_call-btn" type="submit" value="Заказать звонок"> -->
				<button class="order_call-btn" type="button" data-toggle="modal" data-target="#myModal">Заказать звонок</button>
			</div>
		</div>
	</div>
		<div class="col-md-3"></div>
			<center>
<div id="myModal" class="modal fade">
<div class="modal-dialog">
<div class="modal-content">
<div class="modal-header"><button class="close" type="button" data-dismiss="modal">×</button>
<h3 class="modal-title">Оставьте заявку</h3>
</div>
<form action="" method="POST">
<div class="modal-body">
	<div class="modal-inp"><input name="name" id="modal-inp" placeholder="Как к вам обращаться?" class="dushbord__form_input" type="text"></div>
	<div class="modal-tel"><input name="phone" id="modal-inp" placeholder="Укажите свой телефон" class="dushbord__form_input" type="text"></div>
		<div class="modal-tel"><input name="phone" id="modal-inp" placeholder="E-mail (не обязательно)" class="dushbord__form_input" type="text"></div>
		<?php
			if(!empty($_POST['phone'])){
	//Получаем данные из глобальной переменной $_GET, так как мы передаем данные методом GET
	$name = $_POST['name']; // Вытаскиваем имя в переменную
	//$email = $_POST['e-mail']; // Вытаскиваем почту в переменную
	$phone= $_POST['phone'];
	$message = "Имя клиента: $name, <br> Номер телефона: $phone <br> Почта  "; // Формируем сообщение, отправляемое на почту
	$to = ''; // Задаем получателя письма
	$from = $phone;  // От кого пришло письмо
	$subject = "Заявка на ГБО"; // Задаем тему письма
	$headers = "От кого: $from\r\nReply-To: $to\r\nContent-type: text/html; charset=utf-8\r\n"; // Формируем заголовок письма (при неправильном формировании может ломаться кодировка и т.д.)
	mail($to, $subject, $message, $headers);
		}
?>
	<div class="modal-name"><input id="modal-btn" type="submit" name="submit" value="ОТПРАВИТЬ" class="dushbord__form_submit"" type="submit"></div>

	<div class="modal-txt"><p style="color:#fff;">Мы свяжемся с вами в ближайшее время!</p></div>
	
		
		
	
</div>
</form>
</div>
		</div>
	</div>
	</center>
</section>