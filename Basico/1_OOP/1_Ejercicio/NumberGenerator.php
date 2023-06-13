<?php

namespace PrimerEjercicio
{
    interface NumberGenerator
    {
        public function setEmpezar($valor);
        public function getSiguiente();
        public function reiniciar();
    }
}
