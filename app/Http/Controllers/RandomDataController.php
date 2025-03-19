<?php

namespace App\Http\Controllers;

use HiFolks\RandoPhp\Randomize;

class RandomDataController extends Controller
{
    public function generate() 
    {
        $char = Randomize::char()->alphanumeric()->generate();
        echo __('Randomly generate a character:') . $char . PHP_EOL;
        $boolean = Randomize::boolean()->generate();
        echo __('Randomly generate a boolean:') . (int) $boolean . PHP_EOL;
        $float = Randomize::float()->min(0)->max(90)->generate();
        echo __('Randomly generate a float number:') . $float . PHP_EOL;
        $inter = Randomize::integer()->range(1,6)->generate();
        echo __('Randomly generate an integer:') . $inter . PHP_EOL;
        $numberAry = Randomize::sequence()
                     ->min(1)
                     ->max(6)
                     ->count(15)
                     ->generate();
        echo __('The randomly generated numbers are as follows:') . PHP_EOL;
        foreach ($numberAry as $number) {
            echo $number . ' ' . PHP_EOL;
        }
    }
}
