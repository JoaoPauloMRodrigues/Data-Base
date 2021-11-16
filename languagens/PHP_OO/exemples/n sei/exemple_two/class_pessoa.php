<?php
    abstract class Pessoa {
        protected $nome;
        protected $idade;
        protected $sexo;

        //protect todos os seus filhos teram acesso

        public final function fazerAniverssario() {
            $this-> idade ++;
        }

        public function getNome(){
            return $this->nome;
        }

        public function setNome($nome){
            $this->nome = $nome;
        }

        public function getIdade(){
            return $this->idade;
        }

        public function setIdade($idade){
            $this->idade = $idade;
        }

        public function getSexo(){
            return $this->sexo;
        }

        public function setSexo($sexo){
            $this->sexo = $sexo;
        }
}