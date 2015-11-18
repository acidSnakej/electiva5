<?php
         $enviar = $_POST['enviar'];
         if (isset($enviar))
         {
            //validar captcha api google
            $captcha = json_decode(file_get_contents('https://www.google.com/recaptcha/api/siteverify?secret=6Leuqg0TAAAAAHEl2t-3notxW3ShgEqtfJKjYi3V&response='.$_POST['g-recaptcha-response'].'&remoteip='.$_SERVER['REMOTE_ADDR']),TRUE);
            if ($captcha['success'] === TRUE)
            {
                header("location:regitsroCompleto.php");
            }
            else
            {
                header("location:registro.php?error=No has realizado el captcha");
            }

         }
         else
         {
            header("location:registro.php");
         }

 ?>