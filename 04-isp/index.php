<?php 

include __DIR__ . '/ShapeInterface.php';
include __DIR__ . '/Circle.php';
include __DIR__ . '/Square.php';
include __DIR__ . '/AreaCalculator.php';
include __DIR__ . '/SumCalculatorOutputter.php';
include __DIR__ . '/VolumeCalculator.php';

use Ood\Isp\Circle;
use Ood\Isp\Square;
use Ood\Isp\AreaCalculator;
use Ood\Isp\SumCalculatorOutputter;
use Ood\Isp\VolumeCalculator;

$shapes = [
    new Circle(2),
    new Square(5),
    new Square(6),
];


$areas = new AreaCalculator($shapes);
$volumes = new VolumeCalculator($areas);

$output = new SumCalculatorOutputter($areas);
$output2 = new SumCalculatorOutputter($volumes);

echo $output2->JSON();
echo $output2->HTML();