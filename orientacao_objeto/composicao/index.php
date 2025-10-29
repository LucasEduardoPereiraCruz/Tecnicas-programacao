<?php
    require_once "Pessoa.class.php";
    require_once "Celular.class.php";
    //Instanciando o objeto todo (Pessoa)
    $pessoa1 = new Pessoa("Maria da Silva", 14, "98898888");
    $pessoa1 -> setCelular(14, "999999999");

    $pessoa2 = new Pessoa ("Paulo de Souza");
    $celular1 = new Celular (14, "99772727", $pessoa2);

    //Instanciando objeto parte (Celular)
    echo"<pre>";
    var_dump ($celular1);
    echo"</pre>";
?>