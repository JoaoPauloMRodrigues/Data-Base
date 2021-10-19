<?php
    require_once "classe_controle_remoto.php";

    $c = new ControleRemoto;
    $c-> ligar();
    $c->abrirMenu();
    $c->play();
    $c->maisVolume();
    $c->maisVolume();
    $c->maisVolume();



    echo '<pre>';
    print_r($c);
    echo '</pre>';

?>