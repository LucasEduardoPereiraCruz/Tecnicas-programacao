<?php
    require_once "Produto.class.php";
    require_once "Categoria.class.php";

    $categoria1 = new Categoria(1, "Material Escolar");
    $categoria2 = new Categoria(2, "Material de escritório");
    $produto1 = new Produto (1, "Caneta", 3.00, array($categoria1, $categoria2));

    //Mostrar os dados produto1
    echo "<h2>Produto - {$produto1->getNome()}</h2>";
    echo "Preço R$ " . number_format($produto1->getPreco(),2,",",".") . "<br>";
    echo "<h3> Categoria(s)</h3>";
    foreach($produto1->getCategoria() as $dado)
    {
        echo "Descritivo: {$dado->getDescritivo()}<br>";
    }
?>