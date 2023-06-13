<?php

namespace PrimerEjercicio
{
    class DeTres implements NumberGenerator
    {
        protected $iniciar;
        protected $value;

        public function __construct($iniciar, $value)
        {
            $this->iniciar = $iniciar;
            $this->value = $value;
        }

        public function setEmpezar($valor)
        {
            $this->iniciar = $valor;
            $this->value = $valor;
        }

        public function getSiguiente()
        {
            $this->value += 3;
            return $this->value + 3;
        }

        public function reiniciar()
        {
            $this->value = $this->iniciar;
        }

        public function getAnterior()
        {
            $this->value -= 3;
            return $this->value - 3;
        }

        public static function tipoDeSerie()
        {
            return "Es una serie de 3";
        }
    }
}
