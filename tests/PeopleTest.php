<?php

use PHPUnit\Framework\TestCase;
use App\People;
use phpDocumentor\Reflection\Types\Void_;

class PeopleTest extends TestCase
{
    public function testAtriibitesClass() : void
    {
        $this->assertClassHasAttribute('name', People::class);
        $this->assertClassHasAttribute('year', People::class);
        $this->assertClassHasAttribute('size', People::class);
        $this->assertClassHasAttribute('skills', People::class);
    }

    public function testRetunTypes() : void 
    {
        $this->assertInstanceOf(People::class, new People());
        //$this->assertInternalType('People', new People());
    }

    public function testSkills() : void
    {
        $skills = ['Loiro','Bonito','Tudo de Bom'];
        $people = new People();
        $this->assertInstanceOf(People::class, $people);
        $this->assertInternalType('array', $people->getSkills());
        $this->assertEquals(null, $people->setSkills($skills));
        $this->assertEquals($skills, $people->getSkills());
        $this->assertContains('Loiro',$people->getSkills());
    }

}