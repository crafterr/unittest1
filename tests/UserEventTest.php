<?php
/**
 * Created by PhpStorm.
 * User: crafter
 * Date: 31/01/2018
 * Time: 21:16
 */

use PHPUnit\Framework\TestCase;
use crafter\phpunit1\UserEventHandler;
use crafter\phpunit1\Mailer;
class UserEventTest extends TestCase
{

    //czesc dalsza

    public function tearDown()
    {
        Mockery::close();
    }

    public function testUserRegister()
    {



       $mock = Mockery::mock(Mailer);
       $mock->shouldReceive('sendActiveMessage')
            ->once()
            ->andReturn(TRUE);

        $event = new UserEventHandler($mock);
        $this->assertEquals(true,$event->onUserRegister());
    }

}