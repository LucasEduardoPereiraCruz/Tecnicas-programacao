<?php
    require __DIR__ . '/vendor/autoload.php';
    use Dotenv\Dotenv;
    $dotenv = Dotenv:: createImmutable(__DIR__);
    $dotenv -> load();

    $email_username = $_ENV["EMAIL_USERNAME"];
    $email_password = $_ENV["EMAIL_PAASWORD"];
    if($_GET)
    {
        //outras rotas
        $controle = $_GET["controle"];
        $metodo = $_GET["metodo"];
        require_once "controllers/$controle.class.php";
        $obj = new $controle();
        $obj -> $metodo();  
    }
    else
    {
        //Rota inicial
        require_once "controllers/inicioController.class.php";
        $obj = new inicioController();
        $obj -> inicio();  
    } //fim
?>