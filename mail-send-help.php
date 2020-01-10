<?php
$to = 'ifreeworklancer@gmail.com';
$from = 'camp';
$subject = 'Форма вопроса Zоряний';
if (!empty($_POST['name']) && !empty($_POST['phone'])) {
    $message = "
    <html>
        <head>
        <title>{$subject}</title>
        <style>body{font: normal 1rem/1.5 sans-serif;}</style>
        </head>
        <body>
        <h2>Заявка от {$_POST['name']}</h2>
        <p>Телефон: {$_POST['phone']}</p>";
    if (!empty($_POST['message'])) {
        $message .= "<p>Сообщение: {$_POST['message']}</p>";
    }
    $message .= "------<br>Основной сайт";
    $message .= "</body>
        </html>
    ";
    $headers = 'From: ' . $from . "\r\n" .
        'Reply-To: ' . 'Zоряний' . "\r\n" .
        'X-Mailer: PHP/' . phpversion();
    $headers = 'MIME-Version: 1.0' . "\r\n";
    $headers .= 'Content-type: text/html; charset=utf-8' . "\r\n";
    mail($to, $subject, $message, $headers);
}
header('Location: thanks-page.php');