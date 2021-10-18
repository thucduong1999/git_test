<?php
require __DIR__ . '/vendor/autoload.php';

use PSR4\src\Controller\HomeController;
use PSR4\src\Repositories\HomeRepository;

$homeCtrl = new HomeController;
$homeRps = new HomeRepository;

print_r($homeCtrl->actionIndex());
$homeRps->hello();
?>