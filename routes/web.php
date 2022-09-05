<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ManageController;
use App\Http\Controllers\UserController;
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
});

/**manage users laratrust */

Route::prefix('manage')->middleware('role:superadministrator|administrator|editor')->group(function(){  
    Route::get('/',[ManageController::class, 'index']);
    Route::get('/dashboard',[ManageController::class,'dashboard'])->name('manage.dashboard');
    //Route::get('users', [UserController::class, 'index'])->name('users.index');
    Route::resource('users',UserController::class);
    /*Route::get('/users/getusers/','UserController@getUser')->name('users.getusers');*/
    Route::get('users/list', [UserController::class, 'getUsers'])->name('users.list');
  
    });

/*Route::get('/403', function () {
    $owner = App\Models\Role::create([
        'name' => 'owner',
        'display_name' => 'Project Owner', // optional
        'description' => 'User is the owner of a given project', // optional
    ]);
    
    $admin = App\Models\Role::create([
        'name' => 'admin',
        'display_name' => 'User Administrator', // optional
        'description' => 'User is allowed to manage and edit other users', // optional
    ]);
});
*/
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', function() {
    return view('home');
})->name('home')->middleware('auth');
