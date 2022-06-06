<?php 

namespace Ood\Lsp;

use Exception;

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
            if ($shape instanceof ShapeInterface) {
                $area[] = $shape->area();
            } else {
                throw new Exception('Interface not found!');
            }
        }

        return array_sum($area);
    }

}



