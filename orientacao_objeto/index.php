<?php
//Criando um objeto
    //include "Usuario.class.php";
    //include_once "Usuario.class.php";
    //require "Usuario.class.php";
    //O mais usado é o require_once ("O melhor")
    require_once "Usuario.php";
    $usuario1 = new Usuario("Maria", "maria@gmail.com", "m123");
    $usuario2 = new Usuario("", "maria@gmail.com", "m123");
    $usuario3 = new Usuario("", email:"maria@gmail.com", senha:"m123");

    /*echo "<pre>";
    var_dump($usuario1);
    echo "</pre>";

    echo "<pre>";
    var_dump($usuario2);
    echo "</pre>";

    echo "<pre>";
    var_dump($usuario3);
    echo "</pre>";*/

    echo "Nome:{$usuario1->getNome() } <br>";
    echo "Email:{$usuario1->getEmail() } <br>";
    echo "Senha:{$usuario1->getSenha() } <br>";

    $usuario1->setNome ("Maria da Silva");
    echo "Nome:{$usuario1->getNome() } <br>";


?>