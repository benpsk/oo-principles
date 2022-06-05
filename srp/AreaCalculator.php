<?php 

namespace Ood\Srp;

class AreaCalculator
{
    protected $shapes;

    public function __construct($shapes = [])
    {
        var_dump('areas class');
        $this->shapes = $shapes;
    }

    public function sum()
    {
        foreach ($this->shapes as $shape) {
            if ($this->getName($shape, 'Square')) {
                $area[] = pow($shape->length, 2);
            } elseif ($this->getName($shape, 'Circle')) {
                $area[] = pi() * pow($shape->radius, 2);
            } 
        }

        return array_sum($area);
    }

    private function getName($shape, $str) : bool
    {
        $name = new \ReflectionClass($shape);
        return $name->getShortName() == $str ? true : false;
    }

    // output shoult not be here
    // public function output()
    // {
    //     return implode('', [
    //       '',
    //           'Sum of the areas of provided shapes: ',
    //           $this->sum(),
    //       '',
    //   ]);
    // }
}



