<?php
use PHPUnit\Framework\TestCase;
include './src/Calculadora.php';

final class CalculadoraTest extends TestCase
{
    public function testSuma()
    {
        $calc = new Calculadora(3,5);
        $this->assertEquals(8, $calc->suma());
    }

    public function testDiff()
    {
        $calc = new Calculadora(3,5);
        $this->assertEquals(2, $calc->diff());
    }

    public function testMult()
    {
        $calc = new Calculadora(2,2);
        $this->assertEquals(4, $calc->mult());
    }

    public function testDiv()
    {
        $calc = new Calculadora(2,6);
        $this->assertEquals(3, $calc->div());
    }
}
?>