<?php
//testando classes e obejetos
    class Pessoa {
        private $idade;
        public function calculaIdade ($idade) {
            

//usuario digite a data atual
            echo "digite o dia atual";
            $diaAtual = readline();
        
            echo "digite o mês atual";
            $mesAtual = readline ();
        
            echo "digite o ano atual";
            $anoAtual = readline();
        
            echo "digite o dia do seu nascimento: \n";
            $diaNasc = readline();
        
            echo "digite o mes do seu nascimento: \n";
            $mesNasc = readline();
        
            echo "digite o ano do seu nascimento: \n";
            $anoNasc = readline();
            
            $idade = $anoAtual - $anoNasc;

                if ($mesAtual < $mesNasc || ($mesAtual == $mesNasc && $diaAtual < $diaNasc)) {
                    $idade--;
                }
            
        }

        
// função para chamar a idade
        public function informaIdade(){

        }
            
        

        
        //nomes
        public $nomeDudu = "Eduardo ";
        public $nomeJoao = "Joao ";
        
        public function informaNome() {
            
            
            
        }
    }
        
    $Dudu = new Pessoa;
    $Dudu -> calculaIdade();
    $Dudu -> informaIdade();




    $Joao = new Pessoa;

