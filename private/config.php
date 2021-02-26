<?php
    # Configurações EXCLUSIVAS para desenvolvimento
    # error_reporting(E_ALL);
    # ini_set("display_errors", 1);  
    date_default_timezone_set('America/Sao_Paulo');
    
    # Requisição de classes
    $autoload = function($class){
        if($class == 'Mailer'){
            require_once('libs/PHPMailer/src/Exception.php');
            require_once('libs/PHPMailer/src/OAuth.php');
            require_once('libs/PHPMailer/src/PHPMailer.php');
            require_once('libs/PHPMailer/src/POP3.php');
            require_once('libs/PHPMailer/src/SMTP.php');
        };
            require_once('classes/'.$class.'.php');
    };
    spl_autoload_register($autoload);

    # Configurações para o arquivo .HTACCESS
    define('INCLUDE_PATH','http://localhost/projetos/landing_page_tech/');

    # Configurações de banco de dados
    define('HOST','localhost');
    define('DATABASE','');
    define('USER','root');
    define('PASS','');

    # Configurações do PHPMailer
    define('HOST_MAILER', 'smtp.gmail.com');
    define('USER_MAILER', '');
    define('PASS_MAILER', '');
    define('NAME_MAILER', '');

    # Configurações da empresa
    define('ENTERPRISE_NAME', 'BC Serviços');
    define('GENDER_ENTERPRISE_UPPERCASE', 'A');
    define('GENDER_ENTERPRISE_LOWCASE', 'a');
    define('ENTERPRISE_ADDRESS', 'Av. Jaime Dias, 256, Barcarena/PA');  

    # Configurações de links
    define('TITLE_INSTAGRAM', '@eng-gabrielscardoso');
    define('ENTERPRISE_INSTAGRAM', 'eng.gabrielscardoso');
    define('TITLE_WHATSAPP', '(91) 9 8516-0142');
    define('ENTERPRISE_WHATSAPP', '5591985160142');
    define('TITLE_TELEGRAM', '(91) 9 8516-0142');
    define('ENTERPRISE_TELEGRAM', 'gabrielscardoso');
?>
