<?php

require_once('src/routing/Routing.php');

use EasyRouting\Routing;

$routing = new Routing();
echo $routing->test();