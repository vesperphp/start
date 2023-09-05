<?php 

namespace Error;

use App\Front\View;

class ErrorController{


    public function notFound(){

        View::print("error/404");
        
    }

    public function forbidden(){

        View::print("error/403");
        
    }

}