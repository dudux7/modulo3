<?php
    Class Universidade {
        public $nome;

        function __construct($nome) {
        $this->nome = $nome;
        }

        public function informanome(){
            echo "o nome da Universidade é:" . $this->nome ."\n";
        }

    }

    Class PessoaU {
        public $nome;
        function __construct($nome) {
            $this->nome = $nome;
        }

        public function informanome(){
            echo "o nome da pessoa é:" . $this->nome ."\n";
        }
    }
    $Universidade= new Universidade("UTFPR");
    $Universidade ->informanome();

?>