<?php

namespace Auth;

use App\Path\Redirect;

class AuthAccount {
    
    public static function deny(){

        // Deny in advance.... (to test stuff)
        Redirect::error(403, "AuthAccount::Deny");

    }

    public static function loggedin(){

       //echo "the loggedin has been triggered...";
       //Redirect::error(403);

    }

    public static function owner(){

       // echo "the owner has been triggered...";
       //Redirect::error(403);

    }

}