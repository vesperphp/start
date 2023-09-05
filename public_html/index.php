<?php

use App\System;

define("ROOTPATH",  dirname(__DIR__,1));

require_once ROOTPATH."/init.php"; 

$v = new System;
$v->spinUp();
$v->pullController();
$v->spinDown();

