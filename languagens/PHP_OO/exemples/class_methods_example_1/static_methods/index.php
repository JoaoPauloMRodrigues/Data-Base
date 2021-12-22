<?php

require_once 'Carro.php';

Carro:: setNome('Gol');
$nomeCarro = Carro:: getNome();

Carro:: setPreco(23000);
$precoCarro = Carro:: getPreco();