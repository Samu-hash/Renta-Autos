<?php

namespace App\Controllers;

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
use PHPMailer\PHPMailer\SMTP;

class MailController {

    public function __construct() {
        
    }

    private function load() {
        require_once APPATH . 'Libraries/PHPMailer/src/Exception.php';
        require_once APPATH . 'Libraries/PHPMailer/src/PHPMailer.php';
        require_once APPATH . 'Libraries/PHPMailer/src/SMTP.php';

        $mailer = new PHPMailer(true);
        return $mailer;
    }

    public function enviarEmail($data) {
        $mailer = $this->load();
        /*         * *CONFIGURACION DE MAIL */
        $mailer->isSMTP();
        $mailer->SMTPOptions = array(
            'ssl' => array(
                'verify_peer' => false,
                'verify_peer_name' => false,
                'allow_self_signed' => true
            )
        );
        $mailer->Host = 'host';
        $mailer->SMTPAuth = true;
        $mailer->Username = 'usuario smtp';
        $mailer->Password = 'clave smtp';
        $mailer->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;
        $mailer->Port = 'PORT';

        /*         * **CONFIGURACION DE DESTINATARIO** */
        $mailer->setFrom('quien lo envia');
        $mailer->addAddress('destinatario', 'nombre');
        $mailer->Subject = 'asunto';
        $mailer->Body = 'html cuerpo';
        $mailer->isHTML(true);
        $mailer->CharSet = 'UTF-8';

        if ($mailer->send())
            return true;
        else
            return false;
    }

}
