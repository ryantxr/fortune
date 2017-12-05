<?php


require_once dirname(__DIR__) . '/app/Ryantxr/Fortune/Fortune.php';

use Ryantxr\Fortune\Fortune;

$fortune = new Fortune;
echo $fortune->fortune() . "\n";