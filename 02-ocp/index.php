<?php 

include __DIR__ . '/ShapeInterface.php';
include __DIR__ . '/Circle.php';
include __DIR__ . '/Square.php';
include __DIR__ . '/AreaCalculator.php';
include __DIR__ . '/SumCalculatorOutputter.php';

use Ood\Ocp\Circle;
use Ood\Ocp\Square;
use Ood\Ocp\AreaCalculator;
use Ood\Ocp\SumCalculatorOutputter;

$shapes = [
    new Circle(2),
    new Square(5),
    new Square(6),
];

$areas = new AreaCalculator($shapes);
$output = new SumCalculatorOutputter($areas);

echo $output->JSON();
echo $output->HTML();
