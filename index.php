<?php
use Myspace\Galaxy;
use Myspace\System\BlackHole;
require __DIR__ . '/vendor/autoload.php';

ini_set('display_errors', 1);
//header('Content-Type: text/html; charset=utf-8');
error_reporting(E_ALL);
$foo = new Galaxy();
$foo->spaceLog();
$star = new BlackHoles();