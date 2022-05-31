<?php
      // Получим даные с элементов формы
   $login = $_POST['text'];
   $email = $_POST['email'];
   
   $tel = $_POST['tel'];
   $message = $_POST['message'];


   // Обработаем полученые даные

      $login = htmlspecialchars($text); // Преобразование символов в сущности (мнемоники)
      $email = htmlspecialchars($email);
      $tel = htmlspecialchrs($tel);
      $message = htmlspecialchars($message);


      $login = urldecode($text); // Декодирование URL
      $email = urldecode($email);
      $tel = urldecode($tel);
      $message = urldecode($message);

      $login = trim($text); // Удаление пробельных символов с обоих сторон
      $email = trim($email);
      $tel = trim($tel);
      $message = trim($message);
      // Отправка даных на почту

      if(mail("kornilenkotolik7@gmail.com"),
      	"Новое письмо из сайта"
      	"Логин: ".$text"\n".
      	"Email: ".$email."\n".
      	"Телефон: ".$tel."\n".
      	"Сообщение...: ".$message,

      	"From: no-reply@domain.com")
//     ); {

//       echo ('Письмо успешно отправлено');
// }
   

//    else {
//       echo ('Есть ошибка! Проверте даные...');
      
      
      
      
//    }         

?>