<?php

use PHPUnit\Framework\TestCase;


class FunctionTest extends TestCase
{

    public function testIsStraight()
    {
        require 'functions.php';

        //Negative test
        $this->assertEquals(false, j(array('2c', '3d', '4s', '3s', '5s')));
        $this->assertEquals(false, j(array('2c', '3d', '4s', '3s', '10s')));
        $this->assertEquals(false, j(array('2c', '3d', '4s', '3s', '10s')));
        $this->assertEquals(false, j(array('2c', '3d', '4s', '3s', 'as')));
        $this->assertEquals(false, j(array('2c', '3d', '4s', '5s', 'js')));
        $this->assertEquals(false, j(array('2c', '3d', '4s', '6s', '10s')));
        $this->assertEquals(false, j(array('2c', '3d', '4s', '7s', '10s')));
        $this->assertEquals(false, j(array('2c', '3d', '4s', 'qs', '10s')));
        $this->assertEquals(false, j(array('2c', '3d', '4s', '9s', '10s')));

        //Positive test
        $this->assertEquals(true, j(array('2c', '3d', '4s', 'as', '5s')));
        $this->assertEquals(true, j(array('2c', '3d', '4s', 'as', 'kd')));
        $this->assertEquals(true, j(array('2c', '3d', '4s', '5s', '6s')));
        $this->assertEquals(true, j(array('2c', '3d', 'as', 'qs', 'ks')));
        $this->assertEquals(true, j(array('10c', 'jd', 'as', 'qs', 'ks')));
        $this->assertEquals(true, j(array('9c', '10d', 'js', 'qs', 'ks')));
        $this->assertEquals(true, j(array('jc', 'qd', 'as', '2s', 'ks')));
        $this->assertEquals(true, j(array('3c', '4d', '5s', '6s', '7s')));
    }
}
