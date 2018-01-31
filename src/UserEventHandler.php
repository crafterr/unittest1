<?php
/**
 * Created by PhpStorm.
 * User: crafter
 * Date: 31/01/2018
 * Time: 21:04
 */
namespace crafter\phpunit1;

class UserEventHandler
{
    protected $mailer;

    public function __construct(Mailer $mailer)
    {
        $this->mailer = $mailer;
    }

    public function onUserRegister()
    {
        return $this->mailer->sendActiveMessage();
    }

}