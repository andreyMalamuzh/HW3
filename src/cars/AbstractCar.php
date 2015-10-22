<?php

    namespace cars;

    abstract class AbstractCar
    {
        public abstract function getCarColor();
        public abstract function setCarColor($carColor);
        public abstract function getCarYear();
        public abstract function setCarYear($carYear);

        public function __toString()
        {
            $str = 'Car color: '. $this->getCarColor(). '<br>';
            $str .= 'Car year: '. $this->getCarYear(). '<br>';

            return $str;
        }
    }
?>