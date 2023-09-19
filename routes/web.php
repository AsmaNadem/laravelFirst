<?php

use App\Http\Controllers\newController;
use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\exampleController;

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

//Route::get('/', function () {
//    return view('welcome');
//});
/*
//Route::get('/posts', PostController::class,'index');

Route::get('/',function(){
    return '<form action="my/any/route" method="post">
    <input type="hidden" name="_method" value="PUT"/>
    '.csrf_field().'
    <input type="submit" value="go"/></form>';

});

Route::any('my/any/route',function(){
    return '<h1> GO welcome to my any laravel</h1>';
});

Route::delete('my/delete/route',function(){
    return '<h1> GO welcome to laravel</h1>';
});
Route::patch('my/patch',function(){
    return '<h1> GO welcome to laravel</h1>';
});
Route::post('data',function(){
    return '<h1> GO welcome to laravel</h1>';
});
Route::put('mydata',function(){
    return '<h1> GO welcome to laravel</h1>';
});*/

//Route::get('my/data',fn()=>view('mydata'));
//Route::post('receive/data',function (){
//        return 'welcom to receive data';
//})->name('receive');

//Route::controller(exampleController::class)->group(function (){
//        Route::get('my/data','mydata');
//});


////Route::resource('example','exampleController');
//Route::resource('example',exampleController::class);
////Route::view('/','welcome');
////Route::resource('new',[newController::class,]);
//
//Route::delete('example/force/delete/{example}',[exampleController::class,'forceDelete'])->name('example.force');
Route::get('query/builder/get',function (){
    $posts = \DB::table('posts')->delete();
    return $posts;
});

Route::get('orm/get',function (){
    $posts = \App\Models\post::all();
    return 'done';
});

Auth::routes(['verify'=>true]);

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');



