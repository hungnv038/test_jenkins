<?php
include "Test.php";
/**
 * Created by PhpStorm.
 * User: michael
 * Date: 4/8/17
 * Time: 02:25
 */
class TestTest extends PHPUnit_Framework_TestCase
{

    public function test()
    {
        $test = new Test();
        $result = $test->add(2,3);
        $this->assertEquals(5,$result);
    }
}
