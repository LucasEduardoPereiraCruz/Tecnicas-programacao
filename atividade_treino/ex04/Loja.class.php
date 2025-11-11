<?php
    class Loja 
    {
        // 2. Construtor limpo com apenas atributos próprios:
        public function __construct(private int $lotes = 0, private string $numero = "", private array $proprietarios = [], private $condominio = null)
        {
            // Os atributos 'lotes' e 'numero' são inicializados aqui.
        }

        // --- Getters de atributos ---
        public function getLotes()
        {
            return $this -> lotes;
        }

        public function getNumero()
        {
            return $this -> numero;
        }

        public function setLotes($lotes)
        {
            $this->lotes = $lotes;
        }

        public function setNumero($numero)
        {
            $this->numero = $numero;
        }
        
        // --- Métodos de Associação (Proprietario 1..*) ---
        public function getProprietarios()
        {
            return $this->proprietarios;
        }

        // 3. Método SET para adicionar à coleção (conforme seu estilo):
        public function setProprietario($proprietario)
        {
            $this->proprietarios[] = $proprietario;
        }
        
        // --- Métodos de Associação (Condominio 1) ---
        public function getCondominio()
        {
            return $this->condominio;
        }

        public function setCondominio($condominio)
        {
            $this->condominio = $condominio;
        }
    } // Fim da classe 
?>