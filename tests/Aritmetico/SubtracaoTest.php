<?php

namespace CodeExperts\Aritmetico;
use PHPUnit\Framework\TestCase;

class SubtracaoTest extends TestCase{

    public function testSubtraiDoisNumeros(){
        $sub = new Subtracao();
        $sub->setNum1 (10);
        $sub->setNum2 (10);
        $this->assertEquals(0, $sub->subtrair());
    }

}