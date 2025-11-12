<?php
    require_once "Filme.class.php";
    require_once "Ator.class.php";
    require_once "Papel.class.php";

    $filme = new Filme ("Titulo do filme", "15");
    $ator = new Ator ("Nome do ator");

    $papel = new Papel ("Papel feito pelo ator do filme", $filme, $ator);

    echo"<pre>";
    var_dump ($papel);
    echo"</pre>";
?>