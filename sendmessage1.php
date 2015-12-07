<?php
$sendto  = 'puchynlawgroup@gmail.com';
$usermail = $_POST['email'];
$content1  = nl2br($_POST['phone']);
// Формирование заголовка письма
$subject  = "Заявка на 'Получить 7 советов'";
$headers  = "From: ". strip_tags($usermail) ."\r\n";
$headers .= "Reply-To: ". strip_tags($usermail) ."\r\n";
$headers .= "MIME-Version: 1.0\r\n";
$headers .= "Content-Type: text/html;charset=utf-8 \r\n";
// Формирование тела письма
$msg  = "<html><body style='font-family:Arial,sans-serif;'>";
$msg .= "<h2 style='font-weight:bold;border-bottom:1px dotted #ccc;'>Заявка на 'Получить 7 советов'</h2>\r\n";
$msg .= "<p><strong>Имя:</strong> ".$content1."</p>\r\n";
$msg .= "<p><strong>email:</strong> ".$usermail."</p>\r\n";
$msg .= "</body></html>";

// отправка сообщения
if(@mail($sendto, $subject, $msg, $headers)) {
	echo "true";
} else {
	echo "false";
}
?>