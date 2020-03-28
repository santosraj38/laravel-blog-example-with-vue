<?php

use Illuminate\Http\Request;

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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::apiResource('roles','RoleController');
Route::apiResource('categories','CategoryController');
Route::apiResource('posts','PostController');
Route::apiResource('comments','CommentController');
Route::apiResource('likes','LikeController');
Route::apiResource('ratings','RatingController');
Route::apiResource('tags','TagController');

