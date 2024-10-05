<?php
    include_once("Enemigo.php");

    class Koopa extends Enemigo{
        private bool $esCaparazonVerde;

        public function __construct($nombre = "Koopa", $puntosDeVida = 66, $fuerza = 9, $poder = 50, $esCaparazonVerde = true)
        {
            parent::__construct($nombre, $puntosDeVida, $fuerza, $poder);
            $this->esCaparazonVerde = $esCaparazonVerde;
        }

        public function moverse()
        {
            echo $this->getNombre() . " se cae del borde (caparazón verde).<br>";
        }

        public function atacar(): int
        {
            echo $this->getNombre() . " ataca con su caparazón.<br>";
            return $this->getFuerza();
        }
    } 

?>