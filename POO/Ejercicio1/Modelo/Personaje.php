<?php
    abstract class Personaje{
        protected $nombre;
        protected $puntosDeVida;
        protected $fuerza;

        //Constructor
        // public function __construct($nombre, $puntosDeVida, $fuerza)
        // {
        //     $this->nombre = $nombre;
        //     $this->puntosDeVida = $puntosDeVida;
        //     $this->fuerza = $fuerza;
        // }

        //Getters y setters
        public function getNombre()
        {
                return $this->nombre;
        }

        public function setNombre($nombre)
        {
                $this->nombre = $nombre;

                return $this;
        }

        public function getPuntosDeVida()
        {
                return $this->puntosDeVida;
        }

        public function setPuntosDeVida($puntosDeVida)
        {
                $this->puntosDeVida = $puntosDeVida;

                return $this;
        }

        public function getFuerza()
        {
                return $this->fuerza;
        }

        public function setFuerza($fuerza)
        {
                $this->fuerza = $fuerza;

                return $this;
        }

        //Funciones
        abstract public function moverse();
        
        abstract public function atacar() : int;

        public function recibirDano($dano){
            echo "Has perdido " . $this->getPuntosDeVida() - $dano . " puntos de salud.";
        }
    }
    
?>