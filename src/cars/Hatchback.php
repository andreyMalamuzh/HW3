<?php
    namespace cars;

    class Hatchback extends AbstractCar
    {
        protected $carColor;
        protected $carYear;
        protected $carBrand;
        protected $carVehicle;

        public function getCarColor()
        {
            return $this->carColor;
        }

        public function setCarColor($carColor)
        {
            $this->carColor = $carColor;
        }

        public function getCarYear()
        {
            return $this->carYear;
        }

        public function setCarYear($carYear)
        {
            $this->carYear = $carYear;
        }

        public function getCarBrand()
        {
            return $this->carBrand;
        }

        public function setCarBrand($carBrand)
        {
            $this->carBrand = $carBrand;
        }

        public function getCarVehicle()
        {
            return $this->carVehicle;
        }

        public function setCarVehicle($carVehicle)
        {
            $this->carVehicle = $carVehicle;
        }

        public function __toString()
        {
            $str = parent::__toString();
            $str .= 'Brand: '. $this->getCarBrand(). '<br>';
            $str .= 'Vehicle: '. $this->getCarVehicle(). '<br>';

            return $str;
        }
    }
?>