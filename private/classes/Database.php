<?php
    class Database
    {
        private static $pdo;
        public static function connectdb()
        {
            if(self::$pdo == null)
            {
                try
                {
                    self::$pdo = new PDO('mysql:host='.HOST.';dbname='.DATABASE, USER, PASS, array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));
                    self::$pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
                }
                catch(Exception $e)
                {
                    echo '<div style="background-color:red;widht:95%;margin:0 auto;"><p style="padding: 10px 0;text-align:center;color:white;">Atenção! Não foi possível se conectar ao banco de dados!</p></div>';
                }
            }
                return self::$pdo;
        }
    }
?>