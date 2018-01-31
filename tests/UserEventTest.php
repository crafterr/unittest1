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

    public function testUserRegister()
    {
        $event = new UserEventHandler(new Mailer());
        $this->assertEquals(true,$event->onUserRegister());
    }

}