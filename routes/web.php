<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ExampleController;
use App\Http\Controllers\CarController;
use App\Http\Controllers\NewsController;

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
////////////////////////////////
// Route::fallback(function(){
//   return redirect('/');
// });
Route::get('cv',function(){
  return view('cv');  //views files HTML files
});

// call them from controller
///////////////////////////////////////////////////////////////////
// Route::get('login',function(){
//   return view('login');  //views files HTML files
// });
//
// Route::post('recieve',function(){
//   return "Data recieved";  //views files HTML files
// })->name('recieve');
///////////////////////////////////////////////////////
Route::get('login',[ExampleController::class,'login']);
Route::post('recieve',[ExampleController::class,'recieve'])->name('recieve');

// Route::get('form',function(){
//   return view('form');  //views files HTML files
// });
// Route::post('recieved data',function(){
//   return "Data recieved from the form";  //views files HTML files
// })->name('recieved data');

Route::get('test1',[ExampleController::class,'test1']);
Route::post('storeCar',[CarController::class,'store'])->name('storeCar');
Route::get('addCar',[CarController::class,'create']);
//task4
Route::get('addNews',[NewsController::class,'create']);
Route::post('storeNews',[NewsController::class,'store'])->name('storeNews');
//Day5
Route::get('table',[CarController::class,'index']);
Route::get('editCar/{id}',[CarController::class,'edit']);
//Route::put('updateCar/{id}',[CarController::class,'update'])->name('updateCar');

//task 5
Route::get('newsTable',[NewsController::class,'index']);
Route::get('editNews/{id}',[NewsController::class,'edit']);

