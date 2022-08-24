<?php

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/403', function () {
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

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', function() {
    return view('home');
})->name('home')->middleware('auth');



// Administrator & SuperAdministrator Control Panel Routes
Route::group(['middleware' => ['role:administrator']], function () {
    Route::resource('users', 'UsersController');
    Route::resource('permission', 'PermissionController');
    Route::resource('roles', 'RolesController');
    });
    // Dashboard
    Route::get('/dashboard', 'HomeController@index')->name('dashboard');


// User Meangament
Route::get('user.management',[AdminPanel::Class, 'index'])->name('usermanger');
                                         