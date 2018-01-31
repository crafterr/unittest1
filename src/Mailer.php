<?php
/**
 * Created by PhpStorm.
 * User: crafter
 * Date: 31/01/2018
 * Time: 21:06
 */

namespace crafter\phpunit1;


class Mailer
{

    public function sendActiveMessage()
    {
        return mail('adam@crafter.net.pl', 'Wiadomość aktywacyjna', 'Lorem lipsum', 'From: test@test.pl');
    }
}