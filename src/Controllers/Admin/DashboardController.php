<?php


namespace Kienphamduy\XuongOop\Controllers\Admin;

use Kienphamduy\XuongOop\Commons\Controller;
use Kienphamduy\XuongOop\Commons\Helper;
use Kienphamduy\XuongOop\Models\User;
use Rakit\Validation\Validator;

class DashboardController extends Controller
{
    public function dashboard (){
        $this->renderViewAdmin(__FUNCTION__);

    }
}