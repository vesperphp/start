<?php

use App\System;
use App\Debug\Debug;

define("ROOTPATH",  dirname(__DIR__,1));

require_once ROOTPATH."/init.php"; 

$v = new System;
$v->spin();



 