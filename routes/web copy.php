<?php

use App\Http\Controllers\GreetingController;
use App\Http\Controllers\DemoController;
use Illuminate\Support\Facades\Route;
use App\Models\Greeting;
use App\Models\User;
use App\Models\Demonstration;
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

Route::post('edit2', [DemoController::class, 'edit2'])->name('demo.edit2');
Route::post('edit4', [DemoController::class, 'edit4'])->name('demo.edit4');

Route::get('vullen', [GreetingController::class, 'prepare']);

Route::get('first-greeting', function () {
 return Greeting::first()->body;
});

Route::get('/form', function () {
    return view('contactform');
   });

Route::post('/3456277t', [DemoController::class, 'contact'])->name('demo.contact');

//Route::get('/user/{id}', [UserController::class, 'show']); 

Route::get('/overzicht', [GreetingController::class, 'show']);



Route::get('/edit', [DemoController::class, 'edit']);
//Hieronder de regel (met het aanmaken van de namespace) die nodig is voor het inplannen van de afspraak!!!!!
//Route::get('/edit3', [DemoController::class, 'edit3'])->name('demo.edit3');
Route::get('/edit3/{id}',[DemoController::class, 'edit3'])->name('demo.edit3');

Route::resource('greetings', GreetingController::class);

Route::resource('demo', DemoController::class);
Route::get('/demo', [GreetingController::class, 'keuze']);

Route::resource('afspraak', DemoController::class);
Route::get('/afspraak', [GreetingController::class, 'keuze2']);

Route::get('/', function () {
    $greet = Greeting::first()->created_at;
   // return redirect('https://site.ictop.nl/');
   
    echo $greet->weekday();
    echo '  = dagnummer aanmaak / datum:  ';
    echo $greet ->format('d-m-Y');
    
 
   });

/*   Route::get('/', function () {
    return redirect('https://site.ictop.nl/');
   });
*/
//Onderstaande route push later VERWIJDEREN na het ontwikkelen maar VOOR DEPLOYEN!!!
Route::get('push', function () {
    return view('storing');
   });

Route::get('welcome', function () {
    return view('welcome')->name('welcome');
   });
Route::get('about', function () {
 return view('about');
});
/*
Route::get('afspraak', function () {
 return view('afspraak');
});
*/
//Route::get('demo', function () {
// return view('demo');
//});
Route::get('eenvoudigesite', function () {
    return view('eenvoudigesite');
   });
