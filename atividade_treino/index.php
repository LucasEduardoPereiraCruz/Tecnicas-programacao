<?php
    require_once "Pessoa.class.php";
    require_once "Cliente.class.php";
    require_once "Festa.class.php";
    require_once "Decoracao.class.php";
    require_once "Telefone.class.php";
    require_once "Contratado.class.php";


    $cliente = new Cliente ("001.123.456-11", "Lucas Eduardo e Ana Beatriz ");
    $contratado = new Contratado ("00.000.000/0001-00", "Festa infantil");
    $decoracao = new Decoracao("Tema princesa");
    $festa = new Festa ("07/11/2025", "15/11/2025", 500.00, $cliente, $contratado, $decoracao);
    $telefonesCliente = []; 
    $telefonesCliente[] = new Telefones(14, "981941753");
    $telefonesCliente[] = new Telefones(14, "34184616");
    
    // Atribui o array ao objeto $cliente usando o SETTER
    $cliente->setTelefones($telefonesCliente); 

    // --- 2. CRIAÇÃO E ATRIBUIÇÃO DOS TELEFONES PARA O CONTRATADO (Usando setTelefones) ---
    // Cria o array de objetos Telefones
    $telefonesContratado = []; 
    $telefonesContratado[] = new Telefones(21, "99990000"); 
    
    // Atribui o array ao objeto $contratado usando o SETTER
    $contratado->setTelefones($telefonesContratado);
    
   

    echo "<h2>Festa de aníversário</h2>";
    echo "Data do Contrato: {$festa->getDataContrato()}<br>";
    echo "Data da Festa:  {$festa->getDataFesta()}<br>";
    echo "Valor: {$festa->getValor()}<br>";
    echo "Cliente: {$festa->getCliente() -> getNome()} - {$festa->getCliente() -> getCpf()}<br>"; 
    echo "Decoração: {$festa->getDecoracao() -> getDescritivo()}<br>";
    echo "Telefones: ";
    // Encadeia até obter o ARRAY DE OBJETOS Telefones
    // Esse fluxo abaixo da certo pq o GetTelefones é herdado de pessoa para Cliente e Contratado (Cliente extends Pessoa)
    $telsClienteFesta = $festa->getCliente()->getTelefones();
    
    foreach ($telsClienteFesta as $tel) {
        // Percorre o array e chama os getters do OBJETO Telefones ($tel)
        echo "({$tel->getDdd()}) {$tel->getNumero()} | ";
    }
    echo "<br><br>";

    // DADOS DO CONTRATADO
    echo "<h3> Contratado</h3>";
    echo "Nome: {$festa->getContratado()->getNome()}<br>";
    echo "CNPJ: {$festa->getContratado()->getCnpj()}<br>";

    // EXIBIÇÃO DOS TELEFONES DO CONTRATADO (ENCADEAMENTO + LOOP)
    echo "Telefones: ";
    // Esse fluxo abaixo da certo pq o GetTelefones é herdado de pessoa para Cliente e Contratado (Cliente extends Pessoa)
    $telsContratadoFesta = $festa->getContratado()->getTelefones();
    
    //O as serve para apelido!
    foreach ($telsContratadoFesta as $tel) {
        echo "({$tel->getDdd()}) {$tel->getNumero()} | ";
    }
    echo "<br>";
?> 