<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\homecontroller;
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
/*
GET : lecture
POST : ajouter
PUT : modification complete
PATCH : modification partielle
DELETE 

CONNECT
OPTIONS
*/

Route::get('/', function () {
    return view('welcome');
});
/*Route::get('/',[homecontroller::class,'index']);*/

Route::get('/test',function () {
    
    $nom= 'ben salem';
    return view('test',[
        'nom' => "Yosri",
        "profession" => "etudiant",
        'cours' => ['PHP','HTML','MVC','LARAVEL']
    ]);
});

/** my projects route */
Route::get('/myprojects', function () {
    return view('myprojects');
})->name('myprojects');

/** dashboard route */
Route::get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

/** Contact Support route */
Route::get('/contact', function () {
    return view('contact');
})->name('contact');

Route::get('/test/{nom}/{prenom}', function (Request $request) {
    return view('test', [
        'nom' => $request->nom,
        'prenom' => $request->prenom,

    ]);
}
);


Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});

Route::post('/upload', [UploadController::class, 'upload'])->name('upload');