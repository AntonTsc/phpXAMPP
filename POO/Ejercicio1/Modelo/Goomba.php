<?php
    include_once('Enemigo.php');

    class Goomba extends Enemigo{
        private int $velocidad;

        public function __construct($nombre = "Goomba", $puntosDeVida = 25, $fuerza = 5, $poder = 60, $velocidad = 15){
            parent::__construct($nombre, $puntosDeVida, $fuerza, $poder);
            $this->velocidad = $velocidad;
        }

        public function moverse()
        {
            echo $this->getNombre() . " camina en línea recta.<br>";
        }

        public function atacar(): int
        {
            echo $this->getNombre() . " camina hacia el enemigo.<br>";
            return $this->getFuerza();
        }
    }
?>