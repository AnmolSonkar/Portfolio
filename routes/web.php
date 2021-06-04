<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SocialLoginController;
use Livewire\Livewire;

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

Route::get('/', function () {
    return view('livewire.index');
});


Route::get('/Projects', function () {
    return view('livewire.projects');
});

Route::get('/PPSVMIC', function () {
    return view('livewire.ppsvmic');
});

Route::get('/KeshavMahavidyalaya', function () {
    return view('livewire.kmv');
});

Route::get('/Photoshoto', function () {
    return view('livewire.photoshoto');
});
Route::get('/Resume', function () {
    return view('livewire.resume');
});

Route::get('/Blog', function () {
    return view('livewire.blog');
});

Route::get('/Contact', function () {
    return view('livewire.contact');
});

Route::get('/google',[SocialLoginController::class,"redirectToGoogle"]);
Route::get('/google/callback',[SocialLoginController::class,"handleGoogleBack"]);

Route::get('/github',[SocialLoginController::class,"redirectToGithub"]);
Route::get('/github/callback',[SocialLoginController::class,"handleGithubBack"]);

Route::get('/Blog1',function()
{
    return view('livewire.blog1');
});