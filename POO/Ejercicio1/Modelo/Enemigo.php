<?php
    include_once('Personaje.php');

    abstract class Enemigo extends Personaje{
        private int $poder;

        public function __construct($nombre, $puntosDeVida, $fuerza, $poder){
            parent::__construct($nombre, $puntosDeVida, $fuerza);
            $this->poder = $poder;
        }

        abstract public function moverse();
        abstract public function atacar() : int;
    }

?>