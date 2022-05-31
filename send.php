<?php
      // Получим даные с элементов формы
   $login = $_POST['Username'];
   $pass = $_POST['Email'];
   $email = $_POST['Сообщение...'];
   // $tel = $_POST['tel'];



   // Обработаем полученые даные

      $login = htmlspecialchrs($Username); // Преобразование символов в сущности (мнемоники)
      $pass = htmlspecialchrs($Email);
      $email = htmlspecialchrs($Сообщение...);
      // $tel = htmlspecialchrs($tel);
      $login = urldecode($Username); // Декодирование URL
      $pass = urldecode($Email);
      $email = urldecode($Сообщение...);

      // $tel = urldecode($tel);


      $login = trim($Username); // Удаление пробельных символов с обоих сторон
      $pass = trim($Email);
      $email = trim($Сообщение...);
      // $tel = trim($tel);
      // Отправка даных на почту

      if(mail("kornilenkotolik7@gmail.com"),
      	"Новое письмо из сайта"
      	"Логин: ".$Username."\n".
      	"Пароль: ".$Email."\n".
      	"Email: ".$Сообщение...."\n".
      	// "Телефон: ".$tel,

      	"From: no-reply@mydomain.com")
    ); {

      echo ('Письмо успешно отправлено');
}
   

   else {
      echo ('Есть ошибка! Проверте даные...');
      
      
      
      
   }         

?>