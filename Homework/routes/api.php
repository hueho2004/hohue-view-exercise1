<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/
global $users;
Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
// 2
Route::get('/user', function () {
    global $users;
    return $users;
 });
// 3

Route::get('/{userIndex}', function (int $userIndex) use ($users) {
    foreach ($users as $key => $value) {
        if ($key == $userIndex) {
            return $value;
        }
    }
    return "Cannot find the user with index " . $userIndex;
})->where('userIndex', '[0-9]+');
// 4
Route::get('/{userName}', function (string $userName) use ($users) {
    foreach ($users as $key => $value) {
        if ($value['name'] == $userName) {
            return $value;
        }
    }
    return "Cannot find the user with name " . $userName;
})->where('userName', '[a-zA-Z]+');
// 5
Route::fallback(function () {
    return "You cannot get a user like this!";
});
// 6
Route::get('/{userIndex}/post/{postIndex}', function (int $userIndex, $postIndex) use ($users) {
    foreach ($users as $key => $value) {
        if ($key == $userIndex) {
            return $value["posts"][$postIndex];
        }
    }
    return "Cannot find the post with id $postIndex for user $userIndex";
})->where('userIndex', '[0-9]+')->where('postIndex', '[0-9]+');