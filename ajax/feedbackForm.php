<?php
$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$text = $_POST['text'];

$msg="Имя: {$name} Почта: {$email} Номер телефона: {$phone} Текст сообщения: {$text}";
mail('mail@email.com','Сообщение с сайта', $msg);
echo "Ваше сообщение успешно отправлено";
?>