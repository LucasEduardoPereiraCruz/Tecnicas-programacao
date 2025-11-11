<?php
require_once "Pessoa.class.php";
require_once "Proprietario.class.php";
require_once "Shopping.class.php";
require_once "Loja.class.php";
require_once "Condominio.class.php";

$proprietariio = new Proprietario ("000.000.000-11", "Lucas Eduardo Pereira da Cruz");  

$shopping = new Shopping("00.000.000/0001-00", "Jaú Shopping");

$loja = new Loja(5, "10");

$condominio = new Condominio("25/11/2025", 1000.00, "25/11/2025");

// Loja associa-se ao Proprietário
$loja->setProprietario($proprietariio); 

// Loja associa-se ao Condomínio (relação 1)
$loja->setCondominio($condominio); 

// Shopping agrega a Loja (coleção 1..*)
$shopping->setLoja($loja); 


// --- 3. EXIBIÇÃO DOS DADOS (Baseado no seu modelo) ---

echo "<h2>Shopping</h2>";
echo "Nome: {$shopping->getNome()} - CNPJ: {$shopping->getCnpj()}<br>";

echo "<h3>Detalhes da(s) Loja(s)</h3>"; 
// Shopping tem uma coleção de Lojas -> Percorrer com foreach
foreach($shopping->getLojas() as $loja_obj)
{
    echo "<br> Número: {$loja_obj->getNumero()} - Lotes: {$loja_obj->getLotes()}<br>";
    
    // Loja tem a associação 1 com Condominio (encadeamento direto)
    echo "Condomínio: Data geração: {$loja_obj->getCondominio()->getDataGeracao()} - Valor: {$loja_obj->getCondominio()->getValorFinal()} - Data de Pagamento: {$loja_obj->getCondominio()->getDataPagamento()}<br>";
    
    echo "Proprietário(s): ";

    // Loja tem uma coleção de Proprietários -> Percorrer com foreach
    foreach($loja_obj->getProprietarios() as $proprietario_obj)
    {
        // Proprietário herda nome de Pessoa
        echo "{$proprietario_obj->getNome()} (CPF: {$proprietario_obj->getCpf()}) ";
    }
    echo "<br>";
}

