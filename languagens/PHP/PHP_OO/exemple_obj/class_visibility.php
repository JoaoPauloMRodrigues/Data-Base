<?php
   class Visibilitycaneta
   {
      public $modelo;
      public $cor;
      private $ponta;
      protected $carga;
      protected $tampada;

      function rabiscar(){

         if ($this->tampada) {
            echo 'Não posso escrever!!!';
         }else{
            echo 'escrevendo....';
         }
      }

      public function tampada(){

         $this->tampada = true;
      }
      
      public function destampada(){
         
         $this->tampada = false;
      }


   }


?>