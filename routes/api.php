<?php

use App\Http\Controllers\API\ContactController;
use App\Http\Controllers\API\GradeController;
use App\Http\Controllers\API\HomeController;
use App\Http\Controllers\API\PaymentController;
use App\Http\Controllers\API\PolicyController;
use App\Http\Controllers\API\SectionController;
use App\Http\Controllers\API\SettingsController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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
Route::group(['middleware' => 'cors'], function () {
    Route::apiResources(
        [
            'home' => HomeController::class,
            'grade' => GradeController::class,
            'section' => SectionController::class,
            'settings' => SettingsController::class,
            'contact' => ContactController::class,
            'policy' => PolicyController::class,
        ]
    );
});

// Оплата
Route::match(['GET', 'POST'], 'payments/callback', [PaymentController::class, 'callback'])->name('payment.callback');
Route::post('create', [PaymentController::class, 'create'])->name('payment.create');

Route::redirect('/login', '/admin/login')->name('login');



