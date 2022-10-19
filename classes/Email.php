<?php 

namespace Classes;

use PHPMailer\PHPMailer\PHPMailer;

class Email {

    public $email;
    public $nombre;
    public $token;

    public function __construct($email, $nombre, $token) {
        $this->email = $email;
        $this->nombre = $nombre;
        $this->token = $token;
    }

    public function enviarConfirmacion() {
        //Crear el objeto de email
        $mail = new PHPMailer();
        $mail->isSMTP();
        $mail->Host = 'smtp.mailtrap.io';
        $mail->SMTPAuth = true;
        $mail->Port = 2525;
        $mail->Username = 'd6e0ff5f02eb9f';
        $mail->Password = '14559ae192f890';

        $mail->setFrom('cuentas@appsalon.com');
        $mail->addAddress('cuentas@appslalon.com', 'Appsalon.com');
        $mail->Subject = 'Confirma tu cuenta';
        
        //Set HTML
        $mail->isHTML(true);
        $mail->CharSet = 'UTF-8';       

        $contenido = "<html>";
        $contenido .= "<p><strong>Hola " . $this->nombre . "</strong> Has creado tu cuenta en App Salon, solo debes confirmarla presionando el siguiente enlace</p>";
        $contenido .= "<p> Presiona aqui: <a href='http://localhost:3000/confirmar-cuenta?token=" . $this->token . "'>Confirmar Cuenta</a></p>";
        $contenido .= "<p>Si tu no solicitaste esta cuenta, puedes ignorar el mensaje</p>";
        $contenido .= "</html>";
        $mail->Body = $contenido;

        //Enviar email
        $mail->send();
    }

    public function enviarInstrucciones() {
                //Crear el objeto de email
                $mail = new PHPMailer();
                $mail->isSMTP();
                $mail->Host = 'smtp.mailtrap.io';
                $mail->SMTPAuth = true;
                $mail->Port = 2525;
                $mail->Username = 'd6e0ff5f02eb9f';
                $mail->Password = '14559ae192f890';
        
                $mail->setFrom('cuentas@appsalon.com');
                $mail->addAddress('cuentas@appslalon.com', 'Appsalon.com');
                $mail->Subject = 'Reestablece tu password';
                
                //Set HTML
                $mail->isHTML(true);
                $mail->CharSet = 'UTF-8';       
        
                $contenido = "<html>";
                $contenido .= "<p><strong>Hola " . $this->nombre . "</strong> has solicitado reestablecer tu password, sigue el siguiente enlace para hacerlo.</p>";
                $contenido .= "<p> Presiona aqui: <a href='http://localhost:3000/recuperar?token=" . $this->token . "'>Reestablecer password</a></p>";
                $contenido .= "<p>Si tu no solicitaste esta cuenta, puedes ignorar el mensaje</p>";
                $contenido .= "</html>";
                $mail->Body = $contenido;
        
                //Enviar email
                $mail->send();
    }
}