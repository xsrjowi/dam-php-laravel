<?php

namespace SegundoEjercicio
{

    abstract class DosDimensiones
    {
        protected $base;
        protected $altura;
        protected $nombre;

        public function __construct($base, $altura, $nombre)
        {
            $this->base = $base;
            $this->altura = $altura;
            $this->nombre = $nombre;
        }

        public function getBase()
        {
            return $this->base;
        }

        public function getAltura()
        {
            return $this->altura;
        }

        public function getNombre()
        {
            return $this->nombre;
        }

        public function setBase($value)
        {
            $this->base = $value;
        }

        public function setAltura($value)
        {
            $this->altura = $value;
        }

        public function setNombre($value)
        {
            $this->nombre = $value;
        }

        public function mostrarDimensiones()
        {
            return "{$this->base}x{$this->altura} [Width x Height]";
        }

        abstract public function calcArea();
    }
}
