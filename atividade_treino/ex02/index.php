<?php
    // Inclusão de Arquivos (Baseado no seu fornecimento)
    require_once "Pessoa.class.php";
    require_once "Avaliacao.class.php";
    require_once "Avaliador.class.php";
    require_once "Chef.class.php";
    require_once "Receita.class.php";
    require_once "Telefone.class.php";

   // 1. Criação dos Objetos Pessoas
$chef = new Chef(especialidade: "Confeiteiro", nome: "Lucas Eduardo");
$avaliador = new Avaliador(cpf: "123.456.789-00", nome: "Tiago Grizzo");
    
// 2. Criação da Receita (Associação com Chef)
// A Receita é criada APENAS com seus dados e o Chef
$receita = new Receita(nome: "Bolo de chocolate", ingredientes: "Ovo, Açúcar, Leite, Chocolate, Margarina, Fermento, Granulado", chef: $chef 
);

// 3. Criação da Avaliação (Associação com Avaliador)
// Criamos a Avaliacao com a NOTA (float) e o AVALIADOR (objeto)
$avaliacao = new Avaliacao(nota: 9.5, avaliador: $avaliador); 

$telefonesChef = [];
$telefonesChef[] = new Telefone (14, "981941753");
$telefonesChef[] = new Telefone (14, "999999999");

$chef->setTelefones($telefonesChef);

$telefonesAvaliador = [];
$telefonesAvaliador [] = new Telefone(14, "888888888");
$telefonesAvaliador [] = new Telefone(14, "888888889");

$avaliador->setTelefones($telefonesAvaliador);

// 4. Implementação da Composição (Adicionar a Avaliação)

$receita->setAvaliacao($avaliacao);
    
    
    // Dados 

    echo "<h1> Detalhes da Receita</h1>";
    echo "Nome: {$receita->getNome()} <br>";
    echo "Ingredientes: {$receita->getIngredientes()} <br>";
    
    // Dados do Chef (Associação)
    echo "<h1> Chef Autor</h1>";
    echo "Nome: {$receita->getChef()->getNome()} - Especialidade: {$receita->getChef()->getEspecialidade()}<br>";
    echo "Telefones: <br>";

    
    // Telefones do Chef (Composição: Pessoa -> Telefone)
    foreach ($chef->getTelefones() as $tel) {
        echo "Contato: ({$tel->getDdd()}) {$tel->getNumero()} <br>";
    }
    
    // Avaliações (Composição: Receita -> Avaliacao)
    echo "<h1> Avaliações Recebidas</h1>"; 
    
    foreach ($receita->getAvaliacao() as $avaliacao) 
    {
        // Avaliação (Parte da Receita)
        echo "<br> Nota: {$avaliacao->getNota()} <br>";
        
        // Avaliador (Associação da Avaliacao)
        echo "Avaliador: {$avaliacao->getAvaliador()->getNome()} <br>";
        echo "CPF: {$avaliacao->getAvaliador()->getcpf()} <br>";
        echo "Telefones: <br>";

        // Telefones do Avaliador (Composição: Pessoa -> Telefone)
        foreach ($avaliador->getTelefones() as $tel) {
        echo "Contato: ({$tel->getDdd()}) {$tel->getNumero()} <br>";
    }
    }

     //echo "<pre>";
     //var_dump($chef);
     //echo "</pre>";
?>