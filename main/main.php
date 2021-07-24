<meta http-equiv='refresh' content='10; url=http://thecode.local/'>
<meta charset="UTF-8" />

<?php

$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$message = $_POST['text'];

$mes = "Имя: $name \nE-mail: $email \nТема: $header \nТекст: $message";

$send = mail($email, $name, $mes, "Content-type:text/plain; charset = UTF-8\r\nFrom:$email");

if ($send == 'true') {echo "Сообщение отправлено";}

else {echo "Ой, что-то пошло не так";}
?>