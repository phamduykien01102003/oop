<?php

namespace Kienphamduy\XuongOop\Controllers\Client;


use Kienphamduy\XuongOop\Commons\Controller;
use Kienphamduy\XuongOop\Commons\Helper;
use Kienphamduy\XuongOop\Models\User;

class LoginController extends Controller
{
    private User $user;

    public function __construct()
    {
        $this->user = new User();
    }
    public function showformLogin()
    {
        $this->renderViewClient('login');
      
        
    }

    public function login()
    {
        $user = $this->user->findByEmail($_POST['email']);

        Helper::debug($user);
   
        
    }



}