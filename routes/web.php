<?php

use Illuminate\Support\Facades\Route;

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

Route::get("/", function () {
    return view("welcome");
});

Auth::routes();

Route::get("/home", [
    App\Http\Controllers\HomeController::class,
    "index",
])->name("home");

Route::middleware(["auth"])->group(function () {
    // Route::get("/stories", "StoriesController@index")->name("stories.index");
    // Route::get("/stories/{story}", "StoriesController@show")->name(
    //     "stories.show"
    // );
    Route::resource("stories", "storiesController");
});
