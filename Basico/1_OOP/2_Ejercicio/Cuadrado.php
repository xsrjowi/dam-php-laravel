<?php

namespace SegundoEjercicio
{

    class Cuadrado extends DosDimensiones
    {
        public function __construct($base, $altura, $nombre)
        {
            parent::__construct($base, $altura, $nombre);
        }

        public function calcArea()
        {
            return $this->getBase() * $this->getAltura();
        }

        public function esCuadrado()
        {
            if ($this->getAltura() == $this->getBase()) {
                return true;
            } else {
                return false;
            }
        }
    }
}
