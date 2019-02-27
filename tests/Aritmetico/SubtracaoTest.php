<?php

namespace CodeExperts\Aritmetico;
use PHPUnit\Framework\TestCase;

class SubtracaoTest extends TestCase{

    public function testSubtraiDoisNumeros(){
        $soma = new Subtracao();
        $soma->setNum1 (10);
        $soma->setNum2 (20);
        $this->assertEquals(-10, $soma->subtrair());
    }

}