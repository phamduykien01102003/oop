<?php

namespace Kienphamduy\XuongOop\Controllers\Client;


use Kienphamduy\XuongOop\Commons\Controller;
use Kienphamduy\XuongOop\Commons\Helper;
use Kienphamduy\XuongOop\Models\User;

class HomeController extends Controller
{
    public function index()
    {
      
        $name = "kien phạm duy ";
        // echo __CLASS__ . '@' . __FUNCTION__;
        $this->renderViewClient('home', [
            'name' => $name,
        ]);

    }


}