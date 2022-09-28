<?php

use Illuminate\Support\Facades\Route;
use App\Http\Middleware\AutenticaLogin;

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

Route::get('/', 'App\Http\Controllers\PrincipalController@principal')->name('site.principal');
Route::post('/', 'App\Http\Controllers\CotacaoController@SalvarCotacao')->name('site.cotacao');

Route::get('/login', 'App\Http\Controllers\LoginController@login')->name('site.login');
Route::post('login', 'App\Http\Controllers\LoginController@login')->name('site.login');
Route::post('/login', 'App\Http\Controllers\LoginController@valida_login')->name('site.valida_login');
Route::get('/sair', 'App\Http\Controllers\LoginController@sair')->name('site.sair');


Route::get('/home', 'App\Http\Controllers\HomeController@home')->name('app.home')->Middleware(AutenticaLogin::class);

//rotas usuario
Route::get('/usuario', 'App\Http\Controllers\UsuarioController@usuario')->name('app.usuario')->Middleware(AutenticaLogin::class);
Route::post('/u09999', 'App\Http\Controllers\UsuarioController@CadastraUsuario')->name('app.cadastro.usuario')->Middleware(AutenticaLogin::class);
Route::post('/u09998', 'App\Http\Controllers\UsuarioController@C_usuario')->name('app.c.usuario')->Middleware(AutenticaLogin::class);
Route::get('/u09999', 'App\Http\Controllers\UsuarioController@CadastraUsuario')->name('app.cadastro.usuario')->Middleware(AutenticaLogin::class);
Route::get('/u09998', 'App\Http\Controllers\UsuarioController@C_usuario')->name('app.c.usuario')->Middleware(AutenticaLogin::class);
Route::get('/u09997', 'App\Http\Controllers\UsuarioController@ExcluirUsuario')->name('app.excluir.usuario')->Middleware(AutenticaLogin::class);
Route::post('/u09997', 'App\Http\Controllers\UsuarioController@ExcluirUsuario')->name('app.excluir.usuario')->Middleware(AutenticaLogin::class);

// Rotas da Cotação
Route::get('/cotacao', 'App\Http\Controllers\CotacaoController@cotacao')->name('app.cotacao')->Middleware(AutenticaLogin::class);
Route::post('/cotacao', 'App\Http\Controllers\CotacaoController@cotacao')->name('app.cotacao')->Middleware(AutenticaLogin::class);
Route::post('/c09998', 'App\Http\Controllers\CotacaoController@ExibirCotacao')->name('app.exibir.cotacao')->Middleware(AutenticaLogin::class);
Route::get('/c09999', 'App\Http\Controllers\CotacaoController@ExcluirCotacao')->name('app.Excluir.cotacao')->Middleware(AutenticaLogin::class);
Route::get('/c09997', 'App\Http\Controllers\CotacaoController@atendimento')->name('app.atendimento')->Middleware(AutenticaLogin::class);



