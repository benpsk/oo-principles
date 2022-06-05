<?php 

include __DIR__ . '/Circle.php';
include __DIR__ . '/Square.php';
include __DIR__ . '/AreaCalculator.php';
include __DIR__ . '/SumCalculatorOutputter.php';

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