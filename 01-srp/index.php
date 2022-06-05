<?php 

include_once 'Circle.php';
include_once 'Square.php';
include_once 'AreaCalculator.php';
include_once 'SumCalculatorOutputter.php';

use Ood\Srp\Circle;
use Ood\Srp\Square;
use Ood\Srp\AreaCalculator;
use Ood\Srp\SumCalculatorOutputter;

$shapes = [
    new Circle(2),
    new Square(5),
    new Square(6),
  ];

// not Single Responsibility Principle
// $areas = new AreaCalculator($shapes);
// echo $areas->output();

$areas = new AreaCalculator($shapes);
$output = new SumCalculatorOutputter($areas);

echo $output->JSON();
echo $output->HTML();