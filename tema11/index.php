<?php


include 'class/Company.php';
include 'class/SoftwareCompany.php';
include 'class/ConstructionCompany.php';
include 'class/Programmer.php';
include 'class/Builder.php';

$programmer = new Programmer();
$builder = new Builder();

// $programmer->printInfo();
// $builder->printInfo();

$programmer->printInfo();
$programmer->addSkill('Rusty');
$programmer->addSkill('PHP');
$programmer->addSkill('Pascal');
$programmer->addSkill('Go');
$programmer->addSkill('JAVA');
$programmer->addSkill('Phyton');
$programmer->printInfo();
$programmer->bankrupt();
// $programmer->addSkill('PHP');
// $programmer->printInfo();
echo '<br>';
$builder->printInfo();
$builder->addSkill('Truck Driver');
$builder->printInfo();
$builder->bankrupt();
// $builder->addSkill('Tank Driver');
// $builder->printInfo();
