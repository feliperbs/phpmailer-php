<?php
	require './lib/autoload.php';
	echo $_SERVER['DOCUMENT_ROOT'];
	use PHPMailer\PHPMailer\PHPMailer;

	$Mailer = new PHPMailer();

	$Mailer->isSMTP();

	$Mailer->Charset = "UTF-8";

	$Mailer->SMTPAuth = true;

	$Mailer->SMTPSecure = 'ssl';

	$Mailer->Host = 'smtp.gmail.com';

	$Mailer->Port = 465;

	/*usuário email de saída*/
	$Mailer->Username = 'email@email.com;
	$Mailer->Password = 'senha';

	/*e-mail remetente*/
	$Mailer->From = 'email@email.com';

	/*nome remetente*/
	$Mailer->FromName = 'Felipe Barbosa';

	/*assunto da mensagem*/
	$Mailer->Subject = 'Teste Email PHP';


	/*corpo da msg*/
	$Mailer->Body = '<b>Conteúdo do email</b>';

	/*corpo da msg em texto*/
	$Mailer->AltBody = "conteúdo do email em texto";

	/*destinatário*/
	$Mailer->AddAddress('ofeliperbs@gmail.com');

	if($Mailer->Send()){
		echo 'Email enviado com sucesso !';
	}else{
		echo 'Email não enviado ! '. $Mailer->ErrorInfo;
	}




