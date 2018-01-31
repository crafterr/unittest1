<?php
/**
 * Created by PhpStorm.
 * User: crafter
 * Date: 31/01/2018
 * Time: 20:55
 */

use PHPUnit\Framework\TestCase;
class ExampleTest extends TestCase
{
    public function testGreetings()
    {
        $greetings = "Hello world";

        $this->assertEquals('Hello world',$greetings);
    }

}
