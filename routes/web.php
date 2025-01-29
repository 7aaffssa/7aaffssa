<?php

use App\Http\Controllers\homecontroller;
use App\Http\Controllers\InformationsController;
use App\Http\Controllers\ProfileController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Symfony\Component\HttpKernel\Profiler\Profile;

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
/*
Route::get('/', function () {
    return view('welcome');
});

*/

route::get('/', [homecontroller::class, 'index'])->name('homepage');

route::get('/profiles', [ProfileController::class, 'index'])->name('profiles.index');

route::get('/profile/{id}', [ProfileController::class, 'show'])
->where('id', '\d+')
->name('profile.show');

route::get('/profiles/create', [InformationsController::class, 'create'])
->name('creaet');

route::get('/settings', [InformationsController::class, 'index'])->name('settings.index');