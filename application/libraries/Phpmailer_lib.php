<?php
defined('BASEPATH') OR exit('No direct script access allowed');	

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

class PHPmailer_lib
{
	public function __construc(){

		log_message('Debug','PHPMailer class is load.');
	}

public function load(){
//cargar librerias

		require_once APPPATH.'third_party/PHPMailer/Exception.php';
		require_once APPPATH.'third_party/PHPMailer/PHPMailer.php';
		require_once APPPATH.'third_party/PHPMailer/SMTP.php';
		
		$mail = new PHPMailer;
		return $mail;
}





}
