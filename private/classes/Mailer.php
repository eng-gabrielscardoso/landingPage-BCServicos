<?php
    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\SMTP;
    use PHPMailer\PHPMailer\Exception;

    class Mailer{
        private $mailer;

        public function __construct($host_mailer, $user_mailer, $pass_mailer, $name_mailer){
            $this->mailer = new PHPMailer(true);
            $this->mailer->CharSet = "UTF-8";

            # Configuração de servidor
            $this->mailer->isSMTP();
            $this->mailer->SMTPDebug = false;
            $this->mailer->SMTPAuth = true;
            $this->mailer->SMTPSecure = 'ssl';
            $this->mailer->Port = 465;

            # Configuração de remetentes
            $this->mailer->Host = $host_mailer;
            $this->mailer->Username = $user_mailer;
            $this->mailer->Password = $pass_mailer;
            $this->mailer->setFrom($user_mailer, $name_mailer);
        }

        # Configurações do disparo
        public function settingsMail($info)
        {
            # Initial email settings
            $this->mailer->isHTML(true);
            #$this->mailer->addAddress('ellen@example.com');               
            #$this->mailer->addReplyTo('info@example.com', 'Information');
            #$this->mailer->addCC('cc@example.com');
            #$this->mailer->addBCC('bcc@example.com');

            # Email attachments
            #$this->mailer->addAttachment('/var/tmp/file.tar.gz');         
            #$this->mailer->addAttachment('/tmp/image.jpg', 'new.jpg');    

            # Email body
            $this->mailer->Subject = $info['subject'];
            $this->mailer->Body = $info['body'];
            #$this->mailer->AltBody = strip_tags($info['body']);   
        }

        public function addAddress($user_mailer, $name_mailer){
            $this->mailer->addAddress($user_mailer, $name_mailer);     
        } 

        public function sendMail(){
            if($this->mailer->send()){
                return true;
            }else{
                die('Ocorreu um erro interno. Favor, tente mais tarde');
            };
        }
    }

?>
