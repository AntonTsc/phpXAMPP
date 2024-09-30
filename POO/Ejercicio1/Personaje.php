<?php
    abstract class Personaje{
        protected $nombre;
        protected $puntosDeVida;
        protected $fuerza;

        public function __construct($nombre, $puntosDeVida, $fuerza)
        {
            $this->nombre = $nombre;
            $this->puntosDeVida = $puntosDeVida;
            $this->fuerza = $fuerza;
        }

        //Hay que hacer getters y setters creo

        // abstract public function moverse();
        // abstract public function atacar() : int;
        // abstract public function recibirDano($dano);
        
    }
    
?>