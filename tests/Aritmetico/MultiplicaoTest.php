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

        $mult2 = new Multiplicacao();
        $mult2->setNum1 (20);
        $this->assertEquals(20, $mult2->getNum1());
        $mult2->setNum2 (20);
        $this->assertEquals(20, $mult2->getNum2());
        $this->assertEquals(400, $mult2->multiplica());
    }
}