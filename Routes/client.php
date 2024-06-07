<?php


// website có trang là 
// trang chủ
// gt
// sản phẩm  
// chi tiết 
// liên hệ 

// định nggiax đc phải tạo controller trc 
// khai báo function tương ứng để xử lí 
// định nghĩa đường dẫn 

// HTTP Method: get , post, put(path), delete, option, head

use Kienphamduy\XuongOop\Controllers\Client\AboutController;
use Kienphamduy\XuongOop\Controllers\Client\ContactController;
use Kienphamduy\XuongOop\Controllers\Client\HomeController;
use Kienphamduy\XuongOop\Controllers\Client\LoginController;
use Kienphamduy\XuongOop\Controllers\Client\ProductController;

$router->get('/',                HomeController::class    . '@index');
$router->get('/about',           AboutController::class   . '@index');

$router->get('/contact',         ContactController::class . '@index');
$router->post('/contact/store',  ContactController::class . '@store');

$router->get('/products',        ProductController::class . '@index');
$router->get('/products/{id}',   ProductController::class . '@detail');

$router->get('/login',          LoginController::class . '@showformLogin');
$router->post('/handle-login',  LoginController::class . '@login');
