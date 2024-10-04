<?php
    include_once 'Personaje.php';
    include_once 'Salta.php';

    class Luigi extends Personaje implements Salta{
        private int $agilidad;

        public function __construct($nombre = "Luigi", $puntosDeVida = 75, $fuerza = 25, $agilidad = 45) {
            parent::__construct($nombre, $puntosDeVida, $fuerza);
            $this->agilidad = $agilidad;
        }

        public function moverse()
        {
            echo $this->getNombre() . " se mueve característicamente.<br>";
        }

        public function atacar(): int
        {
            echo $this->getNombre() . " ataca.<br>";
            return $this->getFuerza();
        }

        public function saltar()
        {
            echo $this->getNombre() . " salta más alto que Mario.<br>";
        }
    }

?>