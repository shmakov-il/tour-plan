<?php
if(isset($_POST['subscribe'])) {

// Файлы phpmailer
require 'phpmailer/PHPMailer.php';
require 'phpmailer/SMTP.php';
require 'phpmailer/Exception.php';

// Переменные, которые отправляет пользователь
$subscribe = $_POST['subscribe'];

// Формирование самого письма
$title = "Новое сообщение Best Tour Plan";
$body = "
<h2>Новое обращение пользователя</h2>
<b>Оформить подписку по следующему адресу электронной почты:</b> $subscribe<br>
";

// Настройки PHPMailer
$mail = new PHPMailer\PHPMailer\PHPMailer();
try {
    $mail->isSMTP();   
    $mail->CharSet = "UTF-8";
    $mail->SMTPAuth   = true;
    $mail->SMTPDebug = 2;
    $mail->Debugoutput = function($str, $level) {$GLOBALS['status'][] = $str;};

    // Настройки вашей почты
    $mail->Host       = 'smtp.mail.ru'; // SMTP сервера вашей почты
    $mail->Username   = 'iliashmakov98@mail.ru'; // Логин на почте
    $mail->Password   = '98petdrf98'; // Пароль на почте
    $mail->SMTPSecure = 'ssl';
    $mail->Port       = 465;
    $mail->setFrom('iliashmakov98@mail.ru', 'Илья Шмаков'); // Адрес самой почты и имя отправителя

    // Получатель письма
    $mail->addAddress('ilia.eduardovich98@gmail.com');  
    
// Отправка сообщения
$mail->isHTML(true);
$mail->Subject = $title;
$mail->Body = $body;    

// Проверяем отравленность сообщения
if ($mail->send()) {$result = "success";} 
else {$result = "error";}

} catch (Exception $e) {
    $result = "error";
    $status = "Сообщение не было отправлено. Причина ошибки: {$mail->ErrorInfo}";
}

// Отображение результата
header('Location: thankyou_subscription.html');
}

if(isset($_POST['name'])) {

// Файлы phpmailer
require 'phpmailer/PHPMailer.php';
require 'phpmailer/SMTP.php';
require 'phpmailer/Exception.php';

// Переменные, которые отправляет пользователь
$name = $_POST['name'];
$phone = $_POST['phone'];
$message = $_POST['message'];

// Формирование самого письма
$title = "Новое сообщение Best Tour Plan";
$body = "
<h2>Новое обращение пользователя</h2>
<b>Имя:</b> $name<br>
<b>Телефон:</b> $phone<br>
<b>Сообщение:</b> $message<br>
";

// Настройки PHPMailer
$mail = new PHPMailer\PHPMailer\PHPMailer();
try {
    $mail->isSMTP();   
    $mail->CharSet = "UTF-8";
    $mail->SMTPAuth   = true;
    $mail->SMTPDebug = 2;
    $mail->Debugoutput = function($str, $level) {$GLOBALS['status'][] = $str;};

    // Настройки вашей почты
    $mail->Host       = 'smtp.mail.ru'; // SMTP сервера вашей почты
    $mail->Username   = 'iliashmakov98@mail.ru'; // Логин на почте
    $mail->Password   = '98petdrf98'; // Пароль на почте
    $mail->SMTPSecure = 'ssl';
    $mail->Port       = 465;
    $mail->setFrom('iliashmakov98@mail.ru', 'Илья Шмаков'); // Адрес самой почты и имя отправителя

    // Получатель письма
    $mail->addAddress('ilia.eduardovich98@gmail.com');  
    
// Отправка сообщения
$mail->isHTML(true);
$mail->Subject = $title;
$mail->Body = $body;    

// Проверяем отравленность сообщения
if ($mail->send()) {$result = "success";} 
else {$result = "error";}

} catch (Exception $e) {
    $result = "error";
    $status = "Сообщение не было отправлено. Причина ошибки: {$mail->ErrorInfo}";
}

// Отображение результата
header('Location: thankyou.html');
}

if(isset($_POST['booking-name'])) {

// Файлы phpmailer
require 'phpmailer/PHPMailer.php';
require 'phpmailer/SMTP.php';
require 'phpmailer/Exception.php';

// Переменные, которые отправляет пользователь
$bookingName = $_POST['bookingName'];
$bookingPhone = $_POST['bookingPhone'];
$bookingMessage = $_POST['bookingMessage'];
$bookingSubscribe = $_POST['bookingSubscribe'];
// Формирование самого письма
$title = "Новое сообщение Best Tour Plan";
$body = "
<h2>Новое обращение пользователя</h2>
<b>Имя:</b> $bookingName<br>
<b>Телефон:</b> $bookingPhone<br>
<b>Почта:</b> $bookingMessage<br>
<b>Сообщение:</b> $bookingSubscribe<br>
";
// Настройки PHPMailer
$mail = new PHPMailer\PHPMailer\PHPMailer();
try {
    $mail->isSMTP();   
    $mail->CharSet = "UTF-8";
    $mail->SMTPAuth   = true;
    $mail->SMTPDebug = 2;
    $mail->Debugoutput = function($str, $level) {$GLOBALS['status'][] = $str;};

    // Настройки вашей почты
    $mail->Host       = 'smtp.mail.ru'; // SMTP сервера вашей почты
    $mail->Username   = 'iliashmakov98@mail.ru'; // Логин на почте
    $mail->Password   = '98petdrf98'; // Пароль на почте
    $mail->SMTPSecure = 'ssl';
    $mail->Port       = 465;
    $mail->setFrom('iliashmakov98@mail.ru', 'Илья Шмаков'); // Адрес самой почты и имя отправителя

    // Получатель письма
    $mail->addAddress('ilia.eduardovich98@gmail.com');  
    
// Отправка сообщения
$mail->isHTML(true);
$mail->Subject = $title;
$mail->Body = $body;    

// Проверяем отравленность сообщения
if ($mail->send()) {$result = "success";} 
else {$result = "error";}

} catch (Exception $e) {
    $result = "error";
    $status = "Сообщение не было отправлено. Причина ошибки: {$mail->ErrorInfo}";
}

// Отображение результата
header('Location: thankyou_booking.html');
}
?>

