<?php
    require_once('../config.php');

    if(isset($_POST['submitForm'])){
        if($_POST['nameForm'] != '' && $_POST['emailForm'] != '' && $_POST['phoneForm'] != ''){
            $email = $_POST['emailForm'];
            if(filter_var($email, FILTER_VALIDATE_EMAIL)){
                $Mailer = new Mailer(HOST_MAILER,USER_MAILER,PASS_MAILER,NAME_MAILER);
                $Mailer->addAddress(USER_MAILER,NAME_MAILER);

                $name = addslashes($_POST['nameForm']);
                $email = addslashes($_POST['emailForm']);
                $phone = addslashes($_POST['phoneForm']);

                $body = "<p style='text-align:justify;font-style:italic;'>Uma nova assinatura foi realizada por ".ucfirst($name)."<p><br> Email: $email. <br> Telefone: $phone. <br>";
                $info = array('subject'=>'Nova assinatura do site', 'body'=>$body);

                $Mailer->settingsMail($info);
                if($Mailer->sendMail()){
                    echo '<script>alert("Mensagem enviada!");</script>';
                }else{
                    echo '<script>alert("Desculpe! Ocorreu um erro.");</script>';
                };
            }else{
                echo '<script>alert("Não é um e-mail válido!");</script>';
            };
        }else{
            echo '<script>alert("Campos vazios não são permitidos!");</script>';
        };
    };
?>
