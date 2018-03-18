<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::get('DangTuanHuy',function()
{
    return 'Hachibi Dang';
});

//Truyền Tham số cho Route
Route::get('DangTuanHuy/{ten}',function($ten)
{
    return 'Hachibi Dang'.$ten;
});
//Dùng Where
Route::get('DangTuanHuy/{ngay}',function($ngay)
{
    return 'Hachibi Dang'.$ngay;
})-> Where (['ngay'=>'[a-zA-Z]+']);
//Định danh cho Route
Route:: get