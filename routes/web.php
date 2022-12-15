<?php

use Illuminate\Support\Facades\Route;

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

Route::view('/', 'pages.index')->name('index');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::group(['middleware' => ['auth'], 'prefix' => 'user', 'as' => 'user.'], function() {
    Route::get('dashboard', "UserController@dashboard")->name('dashboard');

    Route::get('portfolio', "PortfolioController@portfolio")->name('portfolio');
    Route::get('wallet', "FundController@wallet")->name('wallet');
    Route::get('wallet/on-chain', "FundController@onChain")->name('onChain');
    Route::post('process/wallet/on-chain', "FundController@processOnchain")->name('processOnchain');
    Route::get('process/wallet/42643{id}', "FundController@pay")->name('pay');
    Route::post('wallet/on-chain', "FundController@proceed")->name('proceed');
    Route::get('wallet/on-chain/status/362{id}', "FundController@waiting")->name('waiting');

    Route::view('demo', 'dashboard.demo');
});
include 'admin.php';
