<?php
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Http;
use App\Http\Controllers\senderController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    $api = Http::get('http://homologacao3.azapfy.com.br/api/ps/notas');
    $apiArray = json_decode($api, true);
    return view('Remetentes', ['apiArray'=> $apiArray]);
});


Route::get('remetentes', 'App\Http\Controllers\senderController@listall');

Route::get('remetentes/{cnpj}', [senderController::class,'getAllByCNPJ']);

Route::get('calculaRecebimentos/{cnpj}', [senderController::class,'calculateSenderRecebiment']);

Route::get('calculaNaoRecebidos/{cnpj}', [senderController::class,'CalculateWillRecive']);
