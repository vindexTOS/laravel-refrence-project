<?php

use App\Http\Controllers\ListingController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Models\Listing;
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

Route::get('/', [ListingController::class, 'index']);

Route::get('/listings/{id}', [ListingController::class, 'show']);

// Route::get('/hello', function () {
//     return response('<h1>HELLO</h1>', 201)
//         ->header('Content-Type', 'text/plain')
//         ->header('foo', 'bar');
// });

// Route::get('/post/{id}', function ($id) {
//     ddd($id);
//     return response('Post' . $id);
// })->where('id', '[0-9]+'); // regex

// Route::get('/search', function (Request $request) {
//     return response($request->name);
// });
