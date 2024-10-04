<?php
    include_once 'Personaje.php';
    include_once 'Salta.php';
    
    class Mario extends Personaje implements Salta{
        private String $habilidadEspecial;

        public function __construct($nombre = "Mario", $puntosDeVida = 100, $fuerza = 50, $habilidadEspecial = "Lanzar fuego") {
            parent::__construct($nombre, $puntosDeVida, $fuerza);
            $this->habilidadEspecial = $habilidadEspecial;
        }

        public function moverse()
        {
            echo $this->getNombre() . " se mueve.<br>";
        }

        public function atacar() : int
        {
            echo $this->getNombre() . " ataca.<br>";
            return $this->getFuerza();
        }

        public function saltar(){
            echo $this->getNombre() . " salta.<br>";
        }

        public function habilidadEspecial(){
            echo $this->getNombre() . " usa su habilidad especial <b>" . $this->habilidadEspecial . "</b><br>";
        }
    }

    
?>