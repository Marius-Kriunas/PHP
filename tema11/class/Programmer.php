<?php

class Programmer extends SoftwareCompany {
    protected $skills;
    private $name;

    public function __construct() {
        parent::__construct();
        $this->name = $this->generateName();
        $this->skills = array_rand(array_flip($this->programingLanguages), 2);
        

    }

    public function printInfo() {
        $this->printInfoCompany();
        $this->printInfoSoftwareCompany();
        echo 'Programner Skills: '.implode(' - ', $this->skills).'<br>';
        echo 'Programner name: '.$this->name.'<br>';
    
    }
    
}
