<?php
    require_once 'vendor/autoload.php';

    use cars\Sedan;
    use cars\Hatchback;

    $sedan = new Sedan();
    $sedan->setCarColor('White');
    $sedan->setCarYear('2014');
    $sedan->setCarBrand('Toyota');
    $sedan->setCarVehicle('Corolla');

    echo 'Sedan: <br>';
    echo $sedan->__toString();
    echo '<br><br>';

    $hatchback = new Hatchback();
    $hatchback->setCarColor('Silver');
    $hatchback->setCarYear('2010');
    $hatchback->setCarBrand('Volkswagen');
    $hatchback->setCarVehicle('Golf');

    echo 'Hatchback: <br>';
    echo $hatchback->__toString();