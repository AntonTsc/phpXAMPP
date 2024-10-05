<?php
    include_once 'Modelo/Mario.php';
    include_once 'Modelo/Luigi.php';
    include_once 'Modelo/Goomba.php';
    include_once 'Modelo/Koopa.php';

    $Mario = new Mario();
    $Luigi = new Luigi();
    $Goomba = new Goomba();
    $Koopa = new Koopa();

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
    //Koopa
    $Koopa->moverse();
    $Koopa->atacar();
?>