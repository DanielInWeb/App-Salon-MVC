<?php

namespace Classes;

use PHPMailer\PHPMailer\PHPMailer;



class Email{
    public $email;
    public $nombre;
    public $token;

    public function __construct($email, $nombre, $token)
    {
        $this->email = $email;
        $this->nombre = $nombre;
        $this->token = $token;
    }

    public function enviarConfirmacion(){
        // Crear el objeto de email

        $mail = new PHPMailer();
        $mail->isSMTP();
        $mail->Host = 'smtp.mailtrap.io';
        $mail->SMTPAuth = true;
        $mail->Port = 2525;
        $mail->Username = '122467473e0da0';
        $mail->Password = '1914ea47c48cec';

        $mail->setFrom('cuentas@appsalon.com');
        $mail->addAddress('cuentas@appsalon.com', 'appsalon');
        $mail->Subject = 'Confirma tu cuenta';
        
        // Set HTML

        $mail->isHTML(true);
        $mail->CharSet = 'UTF-8';


        $mail->Body = "<html>
        <style>
        @import url('https://fonts.googleapis.com/css2?family=Source+Serif+Pro:wght@200;300;400;700&display=swap');

        body{
            font-family: 'Source Serif Pro', serif;
            text-align: center;
        } 

        h1{
            font-size: 4rem;
            font-weight: 700;
        }

        h2{
            font-size: 3rem;
            font-weight: 400;
        }

        .principal{
            width: 50%;
            font-size: 2rem;
            font-weight: 300;
            margin: 0 auto;

        }

        a{
            text-decoration: none;
            display: block;
            padding: 1rem;
            background-color: #0da6f3;
            color: #ffffff;
            width: 50%;
            text-transform: uppercase;
            font-weight: 700;
            font-size: 1.5rem;
            margin: 2rem auto;
            
        }

        .secundario{
            font-size: 1rem;
            font-weight: 400;
        }

        </style>
        <body>

        <h1>App Salon</h1>

        <h2>¡Confirma Tu Cuenta!</h2>

        <div>
            <p class='principal'>¡Felicidades! " . $this->nombre ." Ya estas a un paso de confirmar tu cuenta por favor da click en el siguiente enlace para completar el registro</p>

            <a href='http://localhost:3001/confirmar-cuenta?token=" . $this->token . "'>Confirmar Cuenta</a>

            <p class='secundario'>Si no creaste ninguna cuenta porfavor ignora este mensaje<p>
        </div>
        
        </body>


        </html";

        

        // Enviar el mail

        $mail->send();
        
    }

    public function enviarInstrucciones(){
        // Crear el objeto de email

        $mail = new PHPMailer();
        $mail->isSMTP();
        $mail->Host = 'smtp.mailtrap.io';
        $mail->SMTPAuth = true;
        $mail->Port = 2525;
        $mail->Username = '122467473e0da0';
        $mail->Password = '1914ea47c48cec';

        $mail->setFrom('cuentas@appsalon.com');
        $mail->addAddress('cuentas@appsalon.com', 'appsalon');
        $mail->Subject = 'Reestablecer Contraseña';
        
        // Set HTML

        $mail->isHTML(true);
        $mail->CharSet = 'UTF-8';


        $mail->Body = "<html>
        <style>
        @import url('https://fonts.googleapis.com/css2?family=Source+Serif+Pro:wght@200;300;400;700&display=swap');

        body{
            font-family: 'Source Serif Pro', serif;
            text-align: center;
        } 

        h1{
            font-size: 4rem;
            font-weight: 700;
        }

        h2{
            font-size: 3rem;
            font-weight: 400;
        }

        .principal{
            width: 50%;
            font-size: 2rem;
            font-weight: 300;
            margin: 0 auto;

        }

        a{
            text-decoration: none;
            display: block;
            padding: 1rem;
            background-color: #0da6f3;
            color: #ffffff;
            width: 50%;
            text-transform: uppercase;
            font-weight: 700;
            font-size: 1.5rem;
            margin: 2rem auto;
            
        }

        .secundario{
            font-size: 1rem;
            font-weight: 400;
        }

        </style>
        <body>

        <h1>App Salon</h1>

        <h2>¡Reestablece tu contraseña!</h2>

        <div>
            <p class='principal'>Hola " . $this->nombre ." ya estas a un paso de reestablecer tu contraseña por favor da click en el siguiente enlace para reestablecerla</p>

            <a href='http://localhost:3001/recuperar?token=" . $this->token . "'>Reestablecer Contraseña</a>

            <p class='secundario'>Si no creaste ninguna cuenta porfavor ignora este mensaje<p>
        </div>
        
        </body>


        </html";

        

        // Enviar el mail

        $mail->send();
        
    }
}