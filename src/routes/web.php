<?php
// web.php：一般的なWebページとしてアクセスするためのルーティングファイル

# 外部ファイルからクラスやメソッド(関数)を引用する
# Illuminateは、vendor/laravel/framework/srcディレクトリ以下にある
use Illuminate\Support\Facades\Route;


# <Controllerはphpコンテナでmakeしたものをインポートする>
# use App\Http\Controllers\コントローラファイル名;
use App\Http\Controllers\TestController;
use App\Http\Controllers\HelloController;


# ブラウザに画面表示をしよう:view編
Route::get('/', [TestController::class, 'index']);




# Route::HTTPメソッド('URLのルートパス', [コントローラ名, 'アクション名'])
# HTTPメソッド: GET, POST, PUT, PATCH, DELETE など
# indexアクションは、コントローラの中で定義されているメソッド名
# indexという名前は、初期表示ページ（TOP,一覧ページ）などの内容を意味することが多い
// Route::get('/test', [TestController::class, 'index']); # ①
Route::get('/hello', [HelloController::class, 'index']); # ②


# アドレス部分に{パラメータ名}を指定することで、パラメータを受け付けるルーティングを設定
# 例えば　http://localhost/test/hello にアクセスすると、helloの部分がパラメータとして取り出され表示されます。＝必須パラメータ
// Route::get('/test/{text}', [TestController::class, 'index']);

# 「？」をつけることで、パラメータが省略可能になります＝任意パラメータ
// Route::get('/test/{text?}', [TestController::class, 'index']);

# クエリパラメータが任意であるため、特別な設定は必要ありません。
// Route::get('/test', [TestController::class, 'index']);

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
