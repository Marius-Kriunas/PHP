<?php

class Company {
    private $name;
    protected $employees;
    protected $turnover;

public function __construct() {

    $this->employees = rand(3,100);
    $this->turnover = rand(10000,10000000);
    $this->name = $this->generateName();

}

protected function printInfoCompany() {
    echo 'Company name: ' .$this->name.'<br>';
    echo 'Company employees: ' .$this->employees.'<br>';
    echo 'Company turnover: ' .$this->turnover.'<br>';

}


public function generateName() {

    $nameLength = rand(5, 12);
    $characters = 'abcdefghijklmnopqrstuvwxyz';
    $charactersLength = strlen($characters);
    $randomName = '';
    
    for ($i = 0; $i < $nameLength; $i++) {
    $randomName .= $characters[rand(0, $charactersLength - 1)];
    }  
    return ucfirst($randomName);
    }

    protected function bankrupt() {
        $this->employees = 0;
        $this->turnover = 0;
        echo $this->name.' is bankrupt. '.$this->employees.' employees are now unemployed.<br>';
    }
}

