<?php
// читать json файл
$json = file_get_contents('../test.json');
$json = json_decode($json, true);

//письмо
$message = '';
$message .= '<h1>Заказ в магазине</h1>';
$message .='<p>Телефон: '.$_POST['phone'].'</p>';
$message .='<p>Почта: '.$_POST['email'].'</p>';
$message .='<p>Клиент: '.$_POST['name'].'</p>';

$cart = $_POST['cart'];
$sum = 0;
foreach ($cart as $id=>$count) {
    $message .=$json[$id]['title'].' --- ';
    $message .=$count.' --- ';
    $message .=$count*$json[$id]['price'];
    $message .='<br>';
    $sum = $sum +$count*$json[$id]['price'];
}
$message .='Всего: '.$sum;

/*$m = mail("sansansanzhik@gmail.com", "Заголовок", "Текст сообщения");

if ($m){echo 1;} else {echo 0;}*/



$to = 'sansansanzhik@gmail.com'.',';
$to .=$_POST['email'];
$spectext = '<!DOCTYPE HTML><html><head><title>Заказ</title></head><body>';
$headers  = 'MIME-Version: 1.0' . "\r\n";
$headers .= 'Content-type: text/html; charset=utf-8' . "\r\n";
$m = mail($to, 'Заказ в магазине', $spectext.$message.'</body></html>', $headers);
if ($m){echo 1;} else {echo 0;}

