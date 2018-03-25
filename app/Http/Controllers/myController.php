<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;

class myController extends Controller
{
    public function XinChao()
    {
echo 'XinChaocacban';
    }
    //
    public function Nghiencuu($ten)
    {
echo "Nghiencuu:".$ten;
return redirect()->route('myRoute');
//Tên của route khác là myRoute
    }
    public function setCookie()
    {
        $response = new Response;
        $response->withCookie('hoten','Laravel Khoa Pham',1);
        echo 'set cook';
        return $response;
    }
    //Hien Thi Cookies
    public function getCookie(Request $request)
    {
        echo'cookie của bạn là';
        return $request->cookie('hoten');

    }

    public function getURL(Request $request)
    {
        // return $request->url();//Trả về 1 url đầy đủ
        // return $request->path();
        //Có thể sử dụng để trà về URL
            // if($request->isMethod('get'))

            // {
            //     echo "Phương thức get";
            // }
            // else
            // echo "Không phải phương thức get";
            // //Nếu là post sẽ k phải nhé
        //Request trả về 1 id
        if($request->is('My*'))
        {
            echo "có My";
        }
        else
        echo "Không có Giang Mai";

    }
    public function postForm(Request $request)
    {
        echo $request->name;
    }
    //Phuong thuc Upload File
    public function postFile(Request $request)
    {
        if($request->hasFile('myFile'))
        {
           $file = $request ->file('myFile');
           $file->move('img','Huy.jpg');
        }
        else
        {

            echo "chưa có File";
        }
    }
    public function getJson()
    {
        $array = ['Khoa Hoc'=>'Laravel'];
        return response()->json(
            $array);

    }
}
