<?php
/*

|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!*/
// Route::get('/sum', function () {
//     return view('form');
// });

// Route::get('/process', function () {
// 	$num1=$_REQUEST['number1'];
// 	$num2=$_REQUEST['number2'];
//     return $num1+$num2;
// });

// Route::get('/sum', function () {
//     return view('form1');
// });

// Route::get('/process1', function () {
//     return view('table',$_REQUEST);
// });

// Route::get('/about/{name}/{age}', function ($name,$age) {
//     return "<h2>hello $name!you're $age years old</h2>";
// });

// Route::get('/info/{name?}/{age?}', function ($name="priya",$age=21) {
//     return "<h2>hello $name!you're $age years old</h2>";
// });
// Route::get('/about', function () {
//     return view ('welcome');
//     });
//   Route::get('/sum', function () {
//     return view ('form');
//     });
//     Route::get('/process', function () {
//     $num1=$_REQUEST['number1'];
//     $num2=$_REQUEST['number2'];	
//     return $num1+$num2;
//     });
//     Route::get('/sum', function () {
//     return view ('form1');
//     });

   
   
   Route::get('/', function () {
    return view ('welcome');
    });
   // Route::get('/sayhello','homecontroller@sayHello');

    // Route::get('/sayhello/{name}','homecontroller@sayHello');

   // Route::get('/getrange/{start}/{end}','homecontroller@getRange');

   // Route::get('/getrange/{start}/{end}','homecontroller@getRange');

   // Route::get('/sum','homecontroller@getform');

   // Route::get('/process2','homecontroller@getsum');

   // Route::get('/sayhello','homecontroller@sayhello');

    // Route::get('/sayhello/{name}','homecontroller@sayhello');

    // Route::get('/getrange/{start}/{end}','homecontroller@getRange');

    // Route::get('/sum','homecontroller@getform');

    //  Route::get('/process2','homecontroller@getsum');
  
//===========3rd class===========//

//  Route::get('/getall', function () {

//   $fetchData=DB::select("SELECT * FROM students");
//   echo "<pre>";
//   print_r($fetchData);
//   echo "</pre>";
// });

   
  //  Route::get('/senddata', function () {
  //   $students=["name"=>"Priya","mobile"=>"017","address"=>"dhaka"];
  //   return view("table2",$students);
  // });


    // Route::get('/show','homecontroller@getShow');

  // Route::get('/getall', function () {
  // });

  // Route::get('/getall','homecontroller@getShow');

// =============6th class==================//


// Route::get('/test', function () {
//     return view ('pages.test');
//     });

// Route::get('/test', function () {
//     return view ('pages1.test');
//     });

   // Route::get('/test', function () {
   //  return view ('pages2.test');
   //  });

   // Route::get('/test', function () {
   //  return view ('pages3.test');
   //  });
   // Route::get('/test', function () {
   //  return view ('pages4/test');
   //  });

//    Route::get('/test', function () {
//     return view ('pages5/test');
//     });
// Route::get('/',function(){
//  	return view('welcome');
//  });

// Route::get('/form',function(){
//  	return view('form');
//  });

// Route::get('/process','homecontroller@process');

 
// Route::get('/greeting',function(){
//   return view("test",["name"=>"masud","age"=>20]);
//  });
  
//   Route::get('/greetings','homecontroller@getAll');


//    Route::get('/form',function(){
//    return view('form');
//  });

// Route::get('/process','homecontroller@process');


// Route::get('/process', function () {
//     return view('table',$_REQUEST);
// });


 //   Route::get('/show', function(){
 //    $fetchData=DB::select("SELECT * FROM priya");
 //    return view("tabledata", ["priya"=>$fetchData]);
 // });

   // Route::get('/form','homeController@form');
   //  Route::get('/process','homeController@process');

    // Route::get('/view','homeController@getTable');

// Route::view('/admin', 'admin.dashboard.index');
Route::view('/admin1', 'admin1.dashboard.index');