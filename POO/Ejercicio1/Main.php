<?php
    include_once 'Modelo/Mario.php';
    include_once 'Modelo/Luigi.php';
    include_once 'Modelo/Goomba.php';

    $Mario = new Mario();
    $Luigi = new Luigi();
    $Goomba = new Goomba();

    //Mario
    $Mario->moverse();
    $Mario->atacar();
    $Mario->recibirDano($Luigi->atacar());
    $Mario->saltar();
    $Mario->habilidadEspecial();
    //Luigi
    $Luigi->moverse();
    $Luigi->atacar();
    $Luigi->saltar();
    //Goomba
    $Goomba->moverse();
    $Goomba->atacar();

?>