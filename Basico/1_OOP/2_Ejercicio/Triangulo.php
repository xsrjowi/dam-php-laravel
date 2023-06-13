<?php

namespace SegundoEjercicio
{

    class Triangulo extends DosDimensiones
    {
        private $estilo;

        public function __construct($base, $altura, $nombre, $estilo)
        {
            parent::__construct($base, $altura, $nombre);
            $this->estilo = $estilo;
        }

        public function getEstilo()
        {
            return $this->estilo;
        }

        public function setEstilo($value)
        {
            $this->estilo = $value;
        }

        public function calcArea()
        {
            $area = (($this->base * $this->altura) / 2);
            return $area;
        }

        public function mostrarEstilo()
        {
            return $this->estilo;
        }
    }
}
