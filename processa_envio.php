<?php
    require "2022/bibliotecas/PHPMailer/Exception.php";
    require "2022/bibliotecas/PHPMailer/OAuth.php";
    require "2022/bibliotecas/PHPMailer/PHPMailer.php";
    require "2022/bibliotecas/PHPMailer/POP3.php";
    require "2022/bibliotecas/PHPMailer/SMTP.php";

	use PHPMailer\PHPMailer\PHPMailer;
	use PHPMailer\PHPMailer\Exception;
	class Mensagem {
		private $email = null;
		private $assunto = null;
		private $mensagem = null;
		private $telefone = null;

		public function __get($atributo) {
			return $this->$atributo;
		}
		public function __set($atributo, $valor) {
			$this->$atributo = $valor;
		}
		public function mensagemValida() {
			if(empty($this->email) || empty($this->nome) || empty($this->mensagem)) {
				return false;
			}
			return true;
		}
	}

	$mensagem = new Mensagem();
	$mensagem->__set('nome', $_POST['nome']);
	$mensagem->__set('email', $_POST['email']);
	$mensagem->__set('assunto', $_POST['assunto']);
	$mensagem->__set('mensagem', $_POST['mensagem']);
	$mensagem->__set('telefone', $_POST['telefone']);

	if(!$mensagem->mensagemValida()) {
		die();
	}

	$mail = new PHPMailer(true);
	try {
			$mail->SMTPDebug = false;                      
			$mail->isSMTP();                            
			$mail->Host       = 'smtp-mail.outlook.com'; //'smtp.gmail.com';              
			$mail->SMTPAuth   = true;                                   
			$mail->Username   = 'nicolas-daher1@hotmail.com';
			$mail->Password   = 'Zksb1@10';                  
			$mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
			$mail->Port       = 587;                           

			$mail->setFrom('nicolas-daher1@hotmail.com',$mensagem->__get('nome').'('.$mensagem->__get('email').')');
			$mail->addAddress('nicolas-daher1@hotmail.com');
			
			$mail->isHTML(true);                               
			$mail->Subject = $mensagem->__get('assunto');
			$mail->CharSet = 'UTF-8';
			$mail->Body    = $mensagem->__get('mensagem').'<br><br>'.$mensagem->__get('telefone');
			$mail->AltBody = 'É necessario utilizar um client que suporte HTML para ter acesso total ao conteúdo dessa mensagem';

			$mail->send();
			header('Location: index.php?email=1');
	} catch (Exception $e) {
			header('Location: index.php?email=2');
			echo 'Não foi possivel enviar este e-mail! Por favor tente novamente mais tarde. Detalhes do erro: ' . $mail->ErrorInfo;
	}
?>