<?php

class ConstructionCompany extends Company {
    protected $buildingObjects;
    private $build = ['Houses', 'Bridges', 'Offices', 'Roads', 'Gardens', 'Railroads', 'Canals', 'Aqueduct', 'Stadions'];

    public function __construct() {
        parent::__construct();
        $this->buildingObjects = (array)array_rand(array_flip($this->build), 4);
    }

    protected function bankrupt() {
        parent::bankrupt();
        $this->buildingObjects = array();
     }

    protected function printInfoConstructionCompany() {
        echo 'Building Objects: '.implode(' - ',$this->buildingObjects).'<br>';
    }
    }
