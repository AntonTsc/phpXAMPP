<?php
    include_once 'Personaje.php';
    include_once 'Salta.php';

    class Luigi extends Personaje{
        private $agilidad;

        public function moverse()
        {
            echo "Luigi se mueve.";
        }

        public function atacar(): int
        {
            return 7;
        }
    }

?>