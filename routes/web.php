<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;
use App\Models\Blog;
use App\Http\Controllers\BlogControllr;
use App\Http\Controllers\ContactController;

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
    return view('welcome');
})->name('default');

Route::get('/home', function () {
    return view('home_page');
})->name('home');

Route::get('/contact', function () {
    return view('contact_page');
})->name('contact');

Route::get('/about', function () {
    return view('about_page');
})->name('about');

Route::get('blog/add', function() {
    DB::table('blogs')->insert([
        'name' => 'Medet',
        'surname' => 'Sabit',
        'age' => '19',
    ]);
});

Route::get('blog', [BlogControllr::class, 'index']);
Route::get('blog/create', function() {
    return view('blog.create');
});

Route::post('blog/create', [BlogControllr::class, 'store'])->name('add-blog'); 

Route::get('blog/{id}', [BlogControllr::class, 'get_blog']);

Route::get('/contact_us', [ContactController::class, 'contact']);

Route::post('/send-message',[ContactController::class, 'sendEmail'])->name('contact.send');