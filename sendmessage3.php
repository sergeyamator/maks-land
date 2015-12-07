<?php
$sendto  = 'puchynlawgroup@gmail.com';
$content1  = nl2br($_POST['name']);
$content2  = nl2br($_POST['phone']);
// Формирование заголовка письма
$subject  = "Заявка 'Проверить застройщика'";
$headers  = "From: ".$content1."\r\n";
$headers .= "Reply-To: ".$content1."\r\n";
$headers .= "MIME-Version: 1.0\r\n";
$headers .= "Content-Type: text/html;charset=utf-8 \r\n";
// Формирование тела письма
$msg  = "<html><body style='font-family:Arial,sans-serif;'>";
$msg .= "<h2 style='font-weight:bold;border-bottom:1px dotted #ccc;'>Заявка 'Проверить застройщика'</h2>\r\n";
$msg .= "<p><strong>Имя:</strong> ".$content1."</p>\r\n";
$msg .= "<p><strong>Телефон:</strong> ".$content2."</p>\r\n";
$msg .= "</body></html>";

// отправка сообщения
if(@mail($sendto, $subject, $msg, $headers)) {
	echo "true";
} else {
	echo "false";
}
?>