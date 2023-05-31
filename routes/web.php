<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DeveloperSectionController;
use App\Http\Controllers\ClientAutoUpdateController;

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

Route::get('/', function () {
    return view('welcome');
});


Route::get('/dashboard', function () {
    return view('dashboard');
});

// Auto Update
Route::group(['prefix' => 'developer-section'], function () {
    Route::get('/', [DeveloperSectionController::class, 'index'])->name('admin.developer-section.index');
    Route::post('/', [DeveloperSectionController::class, 'submit'])->name('admin.developer-section.submit');
    Route::post('/bug-update-setting', [DeveloperSectionController::class, 'bugUpdateSetting'])->name('admin.bug-update-setting.submit');
    Route::post('/version-upgrade-setting', [DeveloperSectionController::class, 'versionUpgradeSetting'])->name('admin.version-upgrade-setting.submit');
});

Route::get('/new-release', [ClientAutoUpdateController::class, 'newVersionReleasePage'])->name('new-release');
Route::get('/bugs', [ClientAutoUpdateController::class, 'bugUpdatePage'])->name('bug-update-page');
// Action on Client server
Route::post('version-upgrade', [ClientAutoUpdateController::class, 'versionUpgrade'])->name('version-upgrade');
Route::post('bug-update', [ClientAutoUpdateController::class, 'bugUpdate'])->name('bug-update');
