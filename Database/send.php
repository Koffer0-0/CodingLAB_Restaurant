
<?php 
	
	if (isset($_REQUEST['ЗАЯВКА'])) {
		/* Устанавливаем e-mail Кому и от Кого будут приходить письма */   
		$to = "Timaak55@gmail.com"; // Здесь нужно написать e-mail, куда будут приходить письма   
		$from = "no-reply@bolat.net"; // Здесь нужно написать e-mail, от кого будут приходить письма, например no-reply(собака)epicblog.net
		 
		/* Указываем переменные, в которые будет записываться информация с формы */
		$first_name = $_REQUEST['name'];
		$phone = $_REQUEST['tel_number'];
		$subject = "Форма отправки сообщений с сайта МР.Болат";
		     
		/* Переменная, которая будет отправлена на почту со значениями, вводимых в поля */
		$mail_to_myemail = "Здравствуйте! 
		Было отправлено сообщение с сайта! 
		Имя отправителя: $first_name
		Номер телефона: $phone";  
		     
		$headers = "From: $from \r\n";
		     
		/* Отправка сообщения, с помощью функции mail() */
		mail($to, $subject, $mail_to_myemail, $headers . 'Content-type: text/plain; charset=utf-8');
		echo "Сообщение отправлено. Спасибо Вам " . $first_name . ", мы скоро свяжемся с Вами.";
		echo "<br /><br /><a href='http://localhost/CodingLAB_Restaurant/'>Вернуться на сайт.</a>";
	}
?>
