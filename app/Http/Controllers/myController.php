<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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
}
