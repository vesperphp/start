<?php

session_start();

/** This is the autoload class setup that is
 * provided by Composer.
 */

require_once ROOTPATH ."/vendor/autoload.php";

// check for requirements:
    // availability of a homepage
    // availability if a 404 page