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
Route::get('vullen', [GreetingController::class, 'prepare']);

Route::get('first-greeting', function () {
 return Greeting::first()->body;
});

Route::get('/form', function () {
    return view('contactform');
   });

Route::post('/contact', [DemoController::class, 'contact'])->name('demo.contact');

//Route::get('/user/{id}', [UserController::class, 'show']); 

Route::get('/overzicht', [GreetingController::class, 'show']);

Route::get('/plan', [GreetingController::class, 'keuze']);

Route::get('/edit', [DemoController::class, 'edit']);

Route::resource('greetings', GreetingController::class);
Route::resource('demo', DemoController::class);

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

Route::get('welcome', function () {
    return view('welcome');
   });
Route::get('about', function () {
 return view('about');
});
Route::get('afspraak', function () {
 return view('afspraak');
});
Route::get('demo', function () {
 return view('demo');
});
Route::get('eenvoudigesite', function () {
    return view('eenvoudigesite');
   });
