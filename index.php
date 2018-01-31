<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
require 'vendor/autoload.php';

use crafter\phpunit1\UserEventHandler;
use crafter\phpunit1\Mailer;

$handler = new UserEventHandler(new Mailer());

dump($handler->onUserRegister()); die();