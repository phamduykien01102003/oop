<?php

namespace Kienphamduy\XuongOop\Controllers\Client;

use Kienphamduy\XuongOop\Commons\Controller;

class ProductController extends Controller
{
    public function index(){
        echo __CLASS__ . '@' . __FUNCTION__;
        
    }
    public function detail($id){
        echo __CLASS__ . '@' . __FUNCTION__ . '@' . $id ;

    }



}