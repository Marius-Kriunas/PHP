<?php


include 'class/Company.php';
include 'class/SoftwareCompany.php';
include 'class/ConstructionCompany.php';
include 'class/Programmer.php';
include 'class/Builder.php';

$programmer = new Programmer();
$builder = new Builder();

$programmer->printInfo();
$builder->printInfo();
