<?php

//* PageController path
use App\Http\Controllers\Guest\PageController as PageController;

use Illuminate\Support\Facades\Route;

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

//* Homepage route - Handled by PageController's index public function
Route::get('/', [PageController::class, 'index']
) -> name('home');