<?php 
$to = 'kornilenkotolik7@gmail.com'
$subject = 'Заказ обратного звонка'
$message = "Имя: {$_POST['name']}\r\n";

$message .= "Телефон: {$_POST['phone']}";
$headers .= 'Content-type: text-plain; charset=utf-8' . "\r\n";
$headers .= 'From: mail@site.com' . "\r\n";

if(mail($to, $subject, $massage, $headers) ){
   
   echo '<p style="color: green";>Ваше сообщение отправлено</p>'
}else{
   echo '<p style="color: red;">Ошибка!</p>'
   
}
