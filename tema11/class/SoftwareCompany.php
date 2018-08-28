<?php

class SoftwareCompany extends Company {
    protected $programingLanguages;
    private $lang = ['PHP','Pascal', 'Go', 'C++', 'JAVA', 'Phyton'];

    public function __construct() {

        parent::__construct();
        $this->programingLanguages = array_rand(array_flip($this->lang), 3);
    }

    protected function printInfoSoftwareCompany() {
        echo 'Programing Languages: '.implode(' - ',$this->programingLanguages).'<br>';
    
    }
}
