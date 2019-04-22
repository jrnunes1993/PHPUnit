<?php

namespace CodeExperts\Aritmetico;
use PHPUnit\Framework\TestCase;

class MultiplicacaoTest extends TestCase
{


    public function testMultiplicaDoisNumeros(){
        $mult = new Multiplicacao();
        $mult->setNum1 (10);
        $mult->setNum2 (20);
        $this->assertEquals(200, $mult->multiplica());
    }
}