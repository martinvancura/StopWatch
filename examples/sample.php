<?php
date_default_timezone_set("Europe/Prague");

require_once '../src/StopWatch.php';

use mvan\stopwatch\StopWatch;

$sw = new StopWatch();
$sw->start();
sleep(30);
$sw->stop();

print $sw->getResult().PHP_EOL;
print $sw->getResult(StopWatch::IN_SECONDS).PHP_EOL;
print $sw->getResult(StopWatch::IN_MINUTES).PHP_EOL;