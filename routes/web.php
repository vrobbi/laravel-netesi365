<?php

use Illuminate\Support\Facades\Route;
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

Route::get('/', function () {
    return view('welcome');
});


Route::get('/testdb', function() {
	$utenti = User::all();

	foreach ($utenti as $utente) {
		echo $utente->email . '  ';
		echo $utente->name  .'<br />';
	}

	$database = Config::get('database.connections.mysql.database');

        $tables = DB::select('SHOW TABLES');

        $combine = "Tables_in_".$database;

        $collection = new \Illuminate\Database\Eloquent\Collection;

        foreach($tables as $table){
          echo  $collection->put($table->$combine, $table->$combine);
        }

       // return $collection; //or compact('collection'); //for combo select
    
	
});


Route::get('/testcampi', function() {
	

	$campi= DB::getSchemaBuilder()->getColumnListing('users');

    
    $campi1= Schema::getColumnListing('users');
var_dump($campi1) ;  
	
});





// Route::get('/', function (Request $request) {
//  return view('welcome');
//    });


//Clear configurations:
			Route::get('/config-clear', function() {
				$status = Artisan::call('config:clear');
				return '<h1>Configurations cleared</h1>';
			});

//Clear cache:
			Route::get('/cache-clear', function() {
				$status = Artisan::call('cache:clear');
				return '<h1>Cache cleared</h1>';
			});

			//Clear cache:

			Route::get('/route-clear', function() {
				$status = Artisan::call('route:clear');
				return '<h1>Route cleared</h1>';
			});

			//View cache:

			Route::get('/view-clear', function() {
				$status = Artisan::call('view:clear');
				return '<h1>View cleared</h1>';
			});

			

			/*

//Clear configuration cache:
			Route::get('/config-cache', function() {
				$status = Artisan::call('config:cache');
				return '<h1>Configurations cache cleared</h1>';
			});
			*/

			
			Route::get('migrate', 'App\Http\Controllers\UserController@migrate');

			Route::get('/ffmpeg', 'FfmpegController@ffmpeg');

			Route::get('run-migrations', function () {
				return Artisan::call('migrate', ["--force" => true ]);
			});
			    

				
						
	//Reoptimized class loader:
Route::get('optimize', 'App\Http\Controllers\UserController@optimize');

Route::get('/test', function () { 
Cache::put( 'chiave2', 'I am in the cache baby! storeee ciaooo', 58);
$result = Cache::get( 'chiave2', 'ciao testtttrtuo');
return $result;
});
			
/*
Route::get('testo/{name?}',  function($name = 'John',Request $requestid) {
  return 'this is a test ' . $requestid->input('name');
});


Route::get('listautenti/{id?}', function (Request $request) { 
    return 'thwrhw '. $request->input('id'); 
  action('UserController@getid',['userid' => $request->input('id')]);

});*/



Route::get('utenti/{id}', 'App\Http\Controllers\UtenteController@show');
 
//   Route::get('utenti', 'Controller@scrivo')->middleware("auth");

Route::get('utenti', 'App\Http\Controllers\UtenteController@utenti');

Route::post('utenti', 'App\Http\Controllers\UtenteController@store');

Route::delete('utenti/{id}', 'App\Http\Controllers\UtenteController@delete');

Route::get('create', 'App\Http\Controllers\UtenteController@create');




Auth::routes([
	// 'reset' => false
]);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/reload-captcha', [App\Http\Controllers\Auth\RegisterController::class, 'reloadCaptcha']);


Route::get('testprovider', 'App\Http\Controllers\TestController@scrivotest');