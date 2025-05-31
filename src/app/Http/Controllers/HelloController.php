<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


# src/route/hello.php　Route::get('/', [TestController::class, 'index']);でここのindexメソッドが呼び出される
class HelloController extends Controller
{
    public function index(){
        return view('hello'); # 作成したresources/views/hello.php を表示する
    }
}
