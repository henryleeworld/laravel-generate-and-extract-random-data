<?php

namespace App\Http\Controllers;

use HiFolks\RandoPhp\Randomize;

class RandomDataController extends Controller
{
    public function generate() 
    {
        $char = Randomize::char()->alphanumeric()->generate();
        echo '隨機產生字元：' . $char . PHP_EOL;
        $boolean = Randomize::boolean()->generate();
        echo '隨機產生布林：' . $boolean . PHP_EOL;
        $float = Randomize::float()->min(0)->max(90)->generate();
        echo '隨機產生浮點數：' . $float . PHP_EOL;
        $inter = Randomize::integer()->range(1,6)->generate();
        echo '隨機產生整數：' . $inter . PHP_EOL;
        $numberAry = Randomize::sequence()
                     ->min(1)
                     ->max(6)
                     ->count(15)
                     ->generate();
        echo '隨機產生數字如下：' . PHP_EOL;
        foreach ($numberAry as $number) {
            echo $number . ' ' . PHP_EOL;
        }
    }
}
