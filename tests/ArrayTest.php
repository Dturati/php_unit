<?php

declare(strict_types = 1);

use PHPUnit\Framework\TestCase;
use App\Arrays;

class ArrayTest extends TestCase
{
    public function testIntanceOff()
    {
        $array = new Arrays();
        $this->assertInstanceOf(App\Arrays::class,$array);
    }


    public function testReturnTypes() : void
    {
        $array = new Arrays();
        $this->assertInternalType('array',$array->arrayVoid(null));
    }

    public function testReturn() : void
    {
        $array = new Arrays();
        $this->assertEquals([],$array->arrayVoid(null));
    }

    public function testReturnValues() : void
    {
        $array = new Arrays();
        $values = [1,2,3,4];
        $this->assertEquals($values, $array->arrayVoid($values));

    }

    public function testAttibute() : Void
    {
        $this->assertObjectHasAttribute('array',new Arrays());
    }

    public function testDirectoryExiste() : void
    {
        $this->assertDirectoryExists(__DIR__."/../src");
    }

}