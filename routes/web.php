<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ExampleController;
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
    return view('welcome');
});
Route::get('test',function(){
  return 'welcome to my first route';
});
Route::get('user/{name}',function($name){
  return "the username is " . $name;
});

Route::get('user/{name}/{age?}',function($name,$age=0){
   return "the username is " .$name. " and the age is " .$age;
})->whereIn('name',['aya','osama']);
//->whereAlpha('name');
//->whereNumber('age')
Route::get('car/{id?}/{name}',function($id=0,$name){
  return "the id is " . $id ." the name is " .$name;
})->whereIn('name',['aya','osama']);
//->where(['id'=>'[0-9]+','name'=>'[a-zA-Z0-9]+' ]);

Route::prefix('products')->group(function(){
  Route::get('/',function(){
    return"Main page";
  });

    Route::get('cars',function(){
      return"cars page";
    });
    Route::get('bags',function(){
      return"bags page";
    });
});
//Task 2 web structure
Route::prefix('Web structure')->group(function(){
  Route::get('/',function(){
    return"It is the Main page";
  });

    Route::get('About',function(){
      return"About page";
    });
    Route::get('contact us',function(){
      return"You can contact us here";
    });
    Route::get('Support/{page}',function($page){
      return "this is ${page} page";
    })->whereIn('page',['Chat','Call','Ticket']);

    Route::get('Training/{page}',function($page){
      return "this is ${page} page";
    })->whereIn('page',['HR','ICT','Marketing','Logistic']);
});

// Route::fallback(function(){
//   return redirect('/');
// });
Route::get('cv',function(){
  return view('cv');  //views files HTML files
});
Route::get('login',function(){
  return view('login');  //views files HTML files
});

Route::post('recieve',function(){
  return "Data recieved";  //views files HTML files
})->name('recieve');

Route::get('test1',[ExampleController::class,'test1']);
