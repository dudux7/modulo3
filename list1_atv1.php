<?php
//testando classes e obejetos
    class Pessoa {
        public $diaAtual;
        public $diaNasc;

        public $mesAtual;
        public $mesNasc;

        public $anoAtual;
        public $anoNasc;

//usuario digite a data atual
        public function DataAtual (){
            echo "digite o dia atual: \n";
            $this->diaAtual = readline();
        
            echo "digite o mês atual: \n";
            $this->mesAtual = readline ();
        
            echo "digite o ano atual: \n";
            $this->anoAtual = readline();
        }

//usuario digite a data atual
        public function DataNasc () {
            echo "digite o dia do seu nascimento: \n";
            $this->diaNasc = readline();
        
            echo "digite o mes do seu nascimento: \n";
            $this->mesNasc = readline();
        
            echo "digite o ano do seu nascimento: \n";
            $this->anoNasc = readline();
            
        }

        public $idade;
// função calcular idade
        public function calculaIdade () {
            $this->DataAtual ();
            $this->DataNasc ();
            $this->idade = $this->anoAtual - $this->anoNasc;

                if ($this->mesAtual < $this->mesNasc || ($this->mesAtual == $this->mesNasc && $this->diaAtual < $this->diaNasc)) {
                    $this->idade--;
                }
        }

// função para chamar a idade
        public function informaIdade(){
            echo "a sua idade é:  " . $this->idade . "\n";
        }

//nomes
        public $nomeDudu = "Dudu";
        public $nomeJoao = "Joao";
        public $n;
        
        public function NomeEscolhido($n) {
            $this->n = $n;
        }
        public function informaNome() {
            if ($this->n === 1) {
                return $this->nomeDudu . "\n";
            } elseif ($this->n === 2) {
                return $this->nomeJoao . "\n";
            } else {
                return "Escolha inválida.\n";
            }
              //  if ($this->n === 1) {
                //    echo "seu nome é: " . $this->nomeDudu . "\n";
                //}elseif ($this->n === 2) {
                 //   echo "seu nome é: " . $this->nomeJoao . "\n";
               // }
        }
    }
        
    $Dudu = new Pessoa;
    $Dudu->NomeEscolhido(1);
        echo "bem vindo " . $Dudu->informaNome() . "\n";
    $Dudu->calculaIdade();

    $Dudu->informaIdade();
        

    $Joao = new Pessoa;

