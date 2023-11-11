

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["имя"];
    $email = $_POST["email"];
    $phone = $_POST["phone"];
    $message = $_POST["сообщение"];

    $to = "jk122@yandex.ru";
    $subject = "Сообщение с вашего сайта";
    $headers = "From: $email";

    mail($to, $subject, $message, $headers);
}
?>

