<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;


class TestController extends Controller
{
    public function index()
    {
        $item = [
            'content' => '本文'
        ];
        return view('index', $item); # index.blade.php用
    }


    # src/route/web.php　Route::get('/', [TestController::class, 'index']);でここのindexメソッドが呼び出される
    # ($text):ルーティングで指定したパラメータを受け取る
    // public function index($text = "デフォルト")
    # クエリパラメータで値を受け取るにはindexの引数にRequest $requestと設定する必要あり
    // public function index(Request $request)
    // {
    //     $item = [
    //         'content' => 'パラメータを渡す',
    //         # ビューにパラメータを渡す
    //         // 'test' => $test,
    //         # ルーティングで指定したパラメータをビューに渡す
    //         // 'param' => $text, 
    //         # ルーティングで指定したパラメータをビューに渡す
    //         'param' => $request->text
    //     ];
    //     return view('index', $item);
    //     # 作成したresources/views/index.php を表示する
    // }
}