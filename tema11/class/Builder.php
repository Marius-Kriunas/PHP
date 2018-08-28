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
        echo 'Builder Skills: '.implode(' - ', $this->skills).'<br>';
        echo 'Builder  name: '.$this->name.'<br>';
    
    }

    public function addSkill($soft) {
        if(in_array($soft, $this->skills) == false) {
            $this->skills[] = $soft;
    
    }
    }

    function bankrupt() {
        parent::bankrupt();
        $this->name = '';
        $this->skills = array();
          
    }
}
