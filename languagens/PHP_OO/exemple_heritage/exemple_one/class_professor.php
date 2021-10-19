<?php

require_once 'class_pessoa.php';

class Professor extends Pessoa {
    private $especialidade;
    private $salario;

    public function aumento ($aum){
        $this->salario += $aum;
    }

        public function getEspecialidade(){
            return $this->especialidade;
        }

        public function setEspecialidade($especialidade){
            $this->especialidade = $especialidade;
        }

        public function getSalario(){
            return $this->salario;
        }

        public function setSalario($salario){
            $this->salario = $salario;
        }
}