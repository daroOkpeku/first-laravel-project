<?php

// use Illuminate\Http\Request;
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
// Route::resource('/Todo', 'TodoController');
Route::get('/Todo', 'TodoController@index')->name('Todo.index');
Route::get('/Todo/create', 'TodoController@create');
Route::post('/Todo/create', 'TodoController@store');
/* ->middleware('auth') can also be used for authenciatetion for a specific page **/ 
/**{todo} passing the variable from the href to display in another passage*/ 
Route::get('/Todo/{todo}/edit', 'TodoController@edit');
/**name('Todo.update') for the form in edit.blade.php   named route->name('Todo.update')*/
Route::get('/Todo/{todo}/show', 'TodoController@show')->name('Todo.show');
Route::patch('/Todo/{todo}/update', 'TodoController@update')->name('Todo.update');
Route::delete('/Todo/{todo}/deleteTodo', 'TodoController@deleteTodo')->name('Todo.deleteTodo');
Route::patch('/Todo/{todo}/complete', 'TodoController@complete')->name('Todo.complete');
Route::patch('/Todo/{todo}/incomplete', 'TodoController@incomplete')->name('Todo.incomplete');

Route::get('/', function () {
    return view('welcome');
});

Route::get('/one', "UserGet@index");


Auth::routes();
Route::post("/upload", "UserGet@Upload");
Route::get('/home', 'HomeController@index')->name('home');

// Route::post('/upload', function(Request $request){
//      dd($request->pic->store('images', 'public'));
//      return "upload";
//     // dd(request()->has('pic'));
// //  dd( request()->all());
// });



// Auth::routes();

// Route::get('/home', 'HomeController@index')->name('home');
