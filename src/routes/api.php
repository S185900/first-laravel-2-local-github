<?php
// api.php：API用のルーティングファイル
// API開発は、アプリケーション間でデータや機能をやり取りするための「橋」を作ること
// APIは、ソフトウェアやアプリケーションが相互に通信するための仕組みを提供するもの。 例えば、スマホアプリから天気予報を取得したり、ウェブサイトでログインするときに「Googleでログイン」を使うようなケースでは、裏側でAPIが動いているんだ。
// 例えば、Laravelを使ったAPI開発では、api.phpファイルにエンドポイント（特定のURLや機能の入口）を定義することで、APIの処理を組み立てていくよ。

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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
