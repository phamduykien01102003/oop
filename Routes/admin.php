<?php

//CRUD bao gồm danh sách, thêm sửa xóa 
//User: 
// GET    -> user/index   ->INDEX      -> danh sách 
// GET    -> user/CREAT   ->CREATE     -> hiển thị form thêm mới 
// post   -> user/store   ->STORE      -> lưu dữ liệu từ form thêm mới vaò db
// get    -> USER/id/show      ->SHOW($id)  ->xem chi tiết 
// get    -> uer/edit/edit ->EDIT($id) -> hiển thị form cập nhật  
// PUT    -> user/ID       ->UPDATE($id) -> luu dữ liệu form thêm mới vào db 
// get-> user/ID      ->DELETE($id) -> XÓA BẢN GHI  TRONG DB 

use Kienphamduy\XuongOop\Controllers\Admin\DashboardController;
use Kienphamduy\XuongOop\Controllers\Admin\UserController;



$router->mount('/admin', function () use ($router) {

    $router->get('/',         DashboardController::class . '@dashboard');

    //CRUD USER
    $router->mount('/users', function () use ($router) {

        $router->get('/',          UserController::class . '@index');
        $router->get('/create',    UserController::class . '@create');
        $router->post('/store',    UserController::class . '@store');
        $router->get('/{id}/show', UserController::class . '@show');
        $router->get('/{id}/edit', UserController::class . '@edit');
        $router->put('/{id}/update', UserController::class . '@update');
        $router->get('/{id}/delete', UserController::class . '@delete');
    });


    

});


