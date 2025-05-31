<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{
    # src/route/web.php　Route::get('/', [TestController::class, 'index']);でここのindexメソッドが呼び出される
    public function index()
    {
        $item = [
            'content' => 'パラメータを渡す', # ビューにパラメータを渡す
        ];
        return view('index', $item); # 作成したresources/views/index.php を表示する
    }
}