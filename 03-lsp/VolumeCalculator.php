<?php 

namespace Ood\Lsp;

class VolumeCalculator extends AreaCalculator
{
    public function __construct($shapes = [])
    {
        parent::__construct($shapes);
    }

    public function sum()
    {
        // logic to calculate the volumes and then return an array of output
        return 5;
    }
}