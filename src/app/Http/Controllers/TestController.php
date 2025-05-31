<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{
    # src/route/web.php　Route::get('/', [TestController::class, 'index']);でここのindexメソッドが呼び出される
    public function index()
    {
    return view('index'); # 作成したresources/views/index.php を表示する
    }
}