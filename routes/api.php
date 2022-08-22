<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});



Route::prefix('users')->group(function (){
    Route::post('login','userController@login');  //用户登录
    Route::post('registered','userController@registed');  //用户注册
    Route::post('emails','student\studentController@email');//zlc email
    Route::post('repassword','userController@repassword_zlc');//zlc email
});

Route::middleware('role:user')->prefix('users')->group(function (){
    Route::post('tem','test\temController@Zr_xxx');//ZLC 路由位置不要变
});//学生端接口

Route::prefix('admin')->group(function (){
    Route::post('adminlogin','userController@adminlogin');  //用户登录
    Route::post('adminregistered','userController@adminregisted');  //用户注册

});

Route::middleware('role:admin')->prefix('admin')->group(function (){

});//管理员端接口

<<<<<<< HEAD
=======


Route::post('find','admin\adminController@Yjj_Find');
Route::post('look','admin\adminController@Yjj_look');
Route::post('examine','admin\adminController@Yjj_examine');
Route::post('see','admin\adminController@Yjj_see');
Route::post('saw','admin\adminController@YJJ_lianbiao');
//Route::post('say','admin\adminController@Yjj_chauxn');
Route::post('speed','admin\adminController@Yjj_speed');
Route::post('sow','admin\adminController@Yjj_run');
Route::post('src','admin\adminController@Yjj_sad');

Route::post('find','admin\admincontroller@WrhFind');  //用户注册
Route::post('find1','admin\admincontroller@WrhFind1');
Route::post('find2','admin\admincontroller@WrhFind2');


>>>>>>> 80161e34bab0b80f30cc69762dd36102dcaa3c2e
