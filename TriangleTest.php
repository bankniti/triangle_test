<?php
use PHPUnit\Framework\TestCase;

include 'Triangle.php';

class TriangleTest extends TestCase
{
    public function testID_1()
    {
        $triangle = new triangle(2,2,'b');
        $this->assertEquals('Not an integer', $triangle->runTriangle()['answer'], 'Input is not an integer');
    }
    public function testID_2()
    {
        $triangle = new triangle(-1,1,1);
        $this->assertEquals('Out of range', $triangle->runTriangle()['answer'], 'Input is out of range');
    }
    public function testID_3()
    {
        $triangle = new triangle(2,3,5);
        $this->assertEquals('Not a triangle', $triangle->runTriangle()['answer'], 'Not a triangle');
    }
    public function testID_4()
    {
        $triangle = new triangle(1,1,1);
        $this->assertEquals('Equilateral', $triangle->runTriangle()['answer'], 'Equilateral');
    }

    public function testID_5()
    {
        $triangle = new triangle(2,3,2);
        $this->assertEquals('Isosceles', $triangle->runTriangle()['answer'], 'Isosceles');
    }

    public function testID_6()
    {
        $triangle = new triangle(3,2,4);
        $this->assertEquals('Scalene', $triangle->runTriangle()['answer'], 'Scalene');
    }

    public function testInteger()
    {
        $triangle = new triangle(2, 3, 4);
        $this->assertTrue($triangle->checkInteger(2, 3, 4)['is_integer'], 'Integer test');
    }

}
