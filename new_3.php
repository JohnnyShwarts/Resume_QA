﻿﻿<!DOCTYPE html>
<html lang="ru">
<head>
  <meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no" />
   <title>Форма обратной связи</title>
  </head>
  <body>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["имя"];
    $email = $_POST["email"];
    $message = $_POST["сообщение"];

    $to = "ваша_почта@example.com";
    $subject = "Сообщение с вашего сайта";
    $headers = "From: $email";

    mail($to, $subject, $message, $headers);
}
?>


</html
</head>
