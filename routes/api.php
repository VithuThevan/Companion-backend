<?php

use App\Http\Controllers\OrderController;
use App\Http\Controllers\MemberController;
use  App\Http\Controllers\DriverController;
use App\Http\Controllers\OwnerController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::post('order/add', [OrderController::class, 'store']);

Route::get('vorder', [OrderController::class, 'vieworders']);

Route::get('vorder/{id}', [OrderController::class, 'viewordersbyid']);

Route::post('mem/add', [MemberController::class, 'addMember']);

Route::get('member', [MemberController::class, 'displayMember']);

Route::get('member/{id}', [MemberController::class, 'memberbyid']);

Route::post('add/driver', [DriverController::class, 'addDriver']);

Route::get('driver', [DriverController::class, 'displayDriver']);

Route::get('driver/{id}', [DriverController::class, 'displayDriverByid']);

Route::post('add/owner', [OwnerController::class, 'addOwner']);

Route::get('add/owner/{id}', [OwnerController::class, 'addDriverToOwner']);

Route::get('owner', [OwnerController::class, 'displayOwner']);

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
