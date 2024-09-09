<?php 
    class humano {

        public $idade = 29;
        
        public function falar () {
            echo "olá mundo! \n";

        }

        private function gritar (){
            echo "PHP É MUITO BOM!!!! \n";
        }

        public function acessaGritar (){
            $this -> gritar();
        }

        protected function falarBaixinho () {
            echo "la la la... \n";
        }

        public function acessaFalarBaixinho () {
            $this -> falarBaixinho ();
        }
    }


        class programador extends Humano {


        }

    $ze = new humano ;

    $ze -> falar ();
    $ze -> acessaGritar ();
    $ze -> acessaFalarBaixinho ();


    $dudu = new programador;

    echo $dudu -> idade . "\n";
    $dudu -> falar();
    $dudu -> acessaGritar();
