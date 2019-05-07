<?php

namespace CodeExperts\Aritmetico;
use PHPUnit\Framework\TestCase;

class SomaTest extends TestCase{

    public function testSomaDoisNumeros(){
        $soma = new Soma();
        $soma->setNum1 (10);
        $this->assertEquals(10, $soma->getNum1());
        $soma->setNum2 (20);
        $this->assertEquals(20, $soma->getNum2());
        $this->assertEquals(30, $soma->somar());



    }

}