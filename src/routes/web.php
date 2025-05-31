<?php

# Controllerはphpコンテナでmakeしたものをインポートする
# use App\Http\Controllers\コントローラファイル名;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TestController; # TestControllerをインポート①
use App\Http\Controllers\HelloController; # HelloControllerをインポート②


# Route::HTTPメソッド('URLのルートパス', [コントローラ名, 'アクション名'])
# HTTPメソッド: GET, POST, PUT, PATCH, DELETE など
# indexアクションは、コントローラの中で定義されているメソッド名
# indexという名前は、初期表示ページ（TOP,一覧ページ）などの内容を意味することが多い
Route::get('/test', [TestController::class, 'index']); # ①
Route::get('/hello', [HelloController::class, 'index']); # ②



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

# http://localhost/ にアクセスするとLaravelのウェルカムページにアクセスすることができる設定
# 「/」（つまり、http://localhost/）にアクセスしたときに、resources/views/welcome.blade.php が表示されるように設定されている
# view('welcome') は「resources/views/welcome.blade.phpというファイルを表示しなさい」という命令
# 作業開始したら、下記はコメントアウトか削除しておく
// Route::get('/', function () {
//     return view('welcome');
// });
