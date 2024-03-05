<?php
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Models\Fruit;
use App\Http\Controllers\FruitController;
use App\Http\Controllers\FormController;
use App\Http\Controllers\UsersController;
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

/*Route::get('/', function () {
   global $users;
   return $users;
});

Route::get('/users', function () {
   global $response;
   return $response;
});
*/
/*Route::get('/myview/{user}', function ($user) {
   return view('home', ['username' => $user]);
   });

   Route::get('/fruits', function() {
   return Fruit::all();
   });

Route::get('/showFruits', [FruitController::class, 'getFruits']);
Route::get('/showAllFruits', [FruitController::class, 'getAllFruits']);
Route::get('/sdasdas', function (Request $request) {
   return "Path: " . $request->path();
});
Route::get('/mimi', function (Request $request) {
   return "Url: " . $request->url();
});
Route::get('/mama', function (Request $request) {
   return "FullUrl: " . $request->fullurl();
});
Route::get('/munu', function (Request $request) {
   return "FullUrlWithQuery: " . $request->fullUrlWithQuery(['name' => 'Hue']);
});
Route::get('/admin/post', function (Request $request) {
   if ($request->is('admin/*')){
   return 'Request path matches with "admin/*"pattern';
}
});
Route::get('/haha', function (Request $request) {
   echo 'Current method HTTP: ' . $request->method().'<br>';
   if ($request->isMethod('get')){
   echo 'This is Get method HTTP';
}
});
Route::get('/userIp', function (Request $request) {
   return "Địa chỉ IP của người dùng: " . $request->ip();
});
Route::post('/post', [FormController::class, 'post']);
Route::get('/', function (){
   return view('form');

});*/
Route::get('/', function () {
   return view('register');
});
Route::post('/post', [UsersController::class, 'Post']);
