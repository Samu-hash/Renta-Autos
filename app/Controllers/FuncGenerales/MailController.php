<?php

namespace App\Controllers\FuncGenerales;

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
use PHPMailer\PHPMailer\SMTP;

class MailController {

    public function __construct() {
        
    }

    private function load() {
        require_once APPPATH . 'Libraries/PHPMailer/src/Exception.php';
        require_once APPPATH . 'Libraries/PHPMailer/src/PHPMailer.php';
        require_once APPPATH . 'Libraries/PHPMailer/src/SMTP.php';

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
        $mailer->Host = 'smtp.gmail.com';
        $mailer->SMTPAuth = true;
        $mailer->Username = 'rentaautos.sv@gmail.com';
        $mailer->Password = 'Renta_autos20';
        $mailer->SMTPSecure = 'ssl';
        $mailer->Port = 465;

        /*         * **CONFIGURACION DE DESTINATARIO** */
        $mailer->setFrom('rentaautos.sv@gmail.com');
        $mailer->addAddress($data['correo'], $data['nombres'].' '.$data['apellidos']);
        $mailer->Subject = 'Inicio de sesion';
        $mailer->Body = 'hola '.$data['nombres'].' '.$data['apellidos']. ' hemos detectado un inicio de sesion';
        $mailer->isHTML(true);
        $mailer->CharSet = 'UTF-8';

        if ($mailer->send())
            return true;
        else
            return false;
    }

}
