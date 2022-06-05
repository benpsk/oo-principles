<?php 

namespace Ood\Srp;

class AreaCalculator
{
    protected $shapes;

    public function __construct($shapes = [])
    {
        $this->shapes = $shapes;
    }

    public function sum()
    {
        foreach ($this->shapes as $shape) {
            if (is_a($shape, 'Ood\Srp\Square')) {
                $area[] = pow($shape->length, 2);
            } elseif (is_a($shape, 'Ood\Srp\Circle')) {
                $area[] = pi() * pow($shape->radius, 2);
            } 
        }

        return array_sum($area);
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



