<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

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

Route::get('sendo', [App\Http\Controllers\HomeController::class, 'sendo'])->name('sendo');
Route::get('/', function () {
    return view('home1');
})->name('acceuil');
Route::get('/submit', function (Request $request) {
    //dd($request);
    $client = new \App\Models\Client();
    $client->nom = $request->nom;
    $client->prénom = $request->prénom;
    $client->émail = $request->émail;
    $client->télephone = $request->télephone;
    $client->motif_resiliation = $request->résiliation;
    $client->date = $request->date;
    $client->marque_voiture = $request->marque;
    $client->puissance = $request->puissance;
    $client->save();
    return redirect()->route('acceuil')->with('message', 'Message bien envoyé!');
})->name('submit');
Route::get('clients', [App\Http\Controllers\HomeController::class, 'clients'])->name('clients');
Auth::routes();

Route::get('/admin', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Auth::routes();
