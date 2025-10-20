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

Auth::routes();


Route::middleware(['auth', 'admin'])->group(function () {
    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
    Route::get('admin/production-list', [App\Http\Controllers\ProductionController::class, 'index'])->name('production.list');
    Route::get('admin/production-create', [App\Http\Controllers\ProductionController::class, 'create'])->name('production.create');
    Route::post('admin/production-store', [App\Http\Controllers\ProductionController::class, 'store'])->name('production.store');
    Route::get('admin/production-edit/{id}', [App\Http\Controllers\ProductionController::class, 'edit'])->name('production.edit');
    Route::post('admin/production-update/{id}', [App\Http\Controllers\ProductionController::class, 'update'])->name('production.update');
    Route::get('admin/production-delete/{id}', [App\Http\Controllers\ProductionController::class, 'destroy'])->name('production.delete');   

    Route::get('admin/operator-list', [App\Http\Controllers\OperatorController::class, 'index'])->name('operator.list');
    Route::get('admin/operator-add', [App\Http\Controllers\OperatorController::class, 'create'])->name('operator.create');
    Route::post('admin/operator-store', [App\Http\Controllers\OperatorController::class, 'store'])->name('operator.store'); 
    Route::get('admin/operator-edit/{id}', [App\Http\Controllers\OperatorController::class, 'edit'])->name('operator.edit');
    Route::post('admin/operator-update/{id}', [App\Http\Controllers\OperatorController::class, 'update'])->name('operator.update');
    Route::get('admin/operator-delete/{id}', [App\Http\Controllers\OperatorController::class, 'destroy'])->name('operator.delete');

    Route::get('admin/machine-list', [App\Http\Controllers\MachineController::class, 'index'])->name('machine.list');
    Route::get('admin/machine-add', [App\Http\Controllers\MachineController::class, 'create'])->name('machine.create');
    Route::post('admin/machine-store', [App\Http\Controllers\MachineController::class, 'store'])->name('machine.store');
    Route::get('admin/machine-edit/{id}', [App\Http\Controllers\MachineController::class, 'edit'])->name('machine.edit');
    Route::post('admin/machine-update/{id}', [App\Http\Controllers\MachineController::class, 'update'])->name('machine.update');    
    Route::get('admin/machine-delete/{id}', [App\Http\Controllers\MachineController::class, 'destroy'])->name('machine.delete');


    Route::get('admin/color-list', [App\Http\Controllers\ColorController::class, 'index'])->name('color.list');
    Route::get('admin/color-create', [App\Http\Controllers\ColorController::class, 'create'])->name('color.create');
    Route::post('admin/color-store', [App\Http\Controllers\ColorController::class, 'store'])->name('color.store');
    Route::get('admin/color-edit/{id}', [App\Http\Controllers\ColorController::class, 'edit'])->name('color.edit');
    Route::post('admin/color-update/{id}', [App\Http\Controllers\ColorController::class, 'update'])->name('color.update');
    Route::get('admin/color-delete/{id}', [App\Http\Controllers\ColorController::class, 'destroy'])->name('color.delete');

    Route::get('admin/customer-list', [App\Http\Controllers\CustomerController::class, 'index'])->name('customer.list');
    Route::get('admin/customer-create', [App\Http\Controllers\CustomerController::class, 'create'])->name('color.create');
    Route::post('admin/customer-store', [App\Http\Controllers\CustomerController::class, 'store'])->name('color.store');
    Route::get('admin/customer-edit/{id}', [App\Http\Controllers\CustomerController::class, 'edit'])->name('color.edit');
    Route::post('admin/customer-update/{id}', [App\Http\Controllers\CustomerController::class, 'update'])->name('color.update');
    Route::get('admin/customer-delete/{id}', [App\Http\Controllers\CustomerController::class, 'destroy'])->name('color.delete');

    Route::get('admin/receipt-list', [App\Http\Controllers\OrderController::class, 'index'])->name('order.list');
    Route::get('admin/receipt-create', [App\Http\Controllers\OrderController::class, 'create'])->name('order.create');
    Route::post('admin/receipt-store', [App\Http\Controllers\OrderController::class, 'store'])->name('order.store');
    Route::get('admin/receipt-edit/{id}', [App\Http\Controllers\OrderController::class, 'edit'])->name('order.edit');
    Route::post('admin/receipt-update/{id}', [App\Http\Controllers\OrderController::class, 'update'])->name('order.update');
    Route::get('admin/receipt-delete/{id}', [App\Http\Controllers\OrderController::class, 'destroy'])->name('order.delete');


    
});




