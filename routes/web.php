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
Route::get('Route1',['as'=>'myRoute',function()
{
echo "Xin chào các bạn nha1";
}]);
//Create 1 route goi route khac
Route::get('goiten',function()
{
    return redirect()->route('myRoute');
});
//myRoute la ten route khac day
Route::get('goiten1',function()
{
    return redirect()->route('myRoute2');
});
Route::get('Route',function()
{
    echo 'Day la Route 2';
})->name('myRoute2');
//Nhom 1 Route
//Luu y mang nhe
Route::group(['prefix'=>'MyGroup'],function()
{
    Route::get('Hachiko',function(){
        return 'Hachiko';
            });
    Route::get('Hachiki',function(){
            return'Hachiki';
            });
    Route::get('Hachike',function(){
            return'Hachike';
            });
});
//Goi Controller
Route::get('GoiController','myController@XinChao');
Route::get('Thamso/{ten}','myController@Nghiencuu');
//Làm việc với URL
Route::get('MyRequest','myController@getURL');
//Form
Route::get('getForm',function()
{
return view('postForm');
});
Route::post('postForm',
[
'as'=>'postForm',
'uses'=>'myController@postForm',
]);
//Cookie
Route::get('setCookie','myController@setCookie');

Route::get('getCookie','myController@getCookie');

Route::get('uploadFile',function()
{
    return view('postFile');
});

Route::post('postFile',['as'=>'postFile','uses'=>'myController@postFile']);
//Json
Route::get('getJson','myController@getJson');
//Truyền tham số cho view
Route::get('myView/{ten}',function($ten)
{
return view('myView',['ten'=>$ten]);
});

