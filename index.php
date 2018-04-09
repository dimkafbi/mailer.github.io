<?php
header("Content-type: text/html; charset=UTF-8");
?>
<html>
	<head>
		<title>отправка писем</title>
	</head>

<body>
	<?php
date_default_timezone_set('Europe/Moscow');
require_once "lib/src/PHPMailer.php";

$mail = new PHPMailer;
$mail->IsSMTP();
$mail->Host        = "smtp.gmail.com";
$mail->SMTPAuth = true;
$mail->SMTPSecure = "ssl";
$mail->Port = 465;
$mail->Charset = 'UTF-8';

$body = file_get_contents('contents.html');
$mail->Username = "stratulat777@gmail.com";
$mail->Password = "7taif7un7";
$mail->SetFrom('stratulat777@gmail.com','Системный администратор');
$mail->Subject = "Отправка писем";
$mail->MsgHTML($body);
$addres = "dima82.91@mail.ru";
$mail->AddAddress($address,"Дима Стратулат");


?>

</body>
</html>