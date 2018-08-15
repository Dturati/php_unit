<?php

declare(strict_types=1);

namespace App;

class Arrays 
{
    private $array = [];
    
    public function __construct()
    {
        
    }

    public function arrayVoid(?array $array) : array 
    {

        if($array) {
            return $array;
        }
        return [];
    }

}