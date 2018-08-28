<?php

class Builder extends ConstructionCompany {
    protected $skills;
    private $name;

    public function __construct() {
        parent::__construct();
        $this->name = $this->generateName();
        $this->skills = (array)array_rand(array_flip(['electrician', 'plumber', 'tractor driver', 'engineer']), 1);


    }

    public function printInfo() {
        $this->printInfoCompany();
        $this->printInfoConstructionCompany();
        echo 'Programner Skills: '.implode(' - ', $this->skills).'<br>';
        echo 'Programner name: '.$this->name.'<br>';
    
    }
}
