<?php 

namespace Home;

use App\Front\View;
use Home\HomeModel;

class HomeController extends HomeModel{

    public function index(){

        View::print("home/index");

    }

}