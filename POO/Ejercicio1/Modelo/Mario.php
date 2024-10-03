<?php
    include_once 'Personaje.php';
    include_once 'Salta.php';
    
    class Mario extends Personaje{
        private $habilidadEspecial = "Lanzar fuego";

        public function moverse()
        {
            echo "Mario se mueve.";
        }

        public function atacar() : int
        {
            return 10;
        }

        public function recibirDano($dano)
        {
            echo "";
        }
    }

    
?>