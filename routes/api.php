<?php

use App\Http\Controllers\Api\PaymentController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\ReconciliationController;
use App\Http\Controllers\Api\ReportController;


Route::middleware('auth:sanctum')->group(function(){

    Route::apiResource('payments', PaymentController::class);
    Route::post(
        'payments/{id}/reconcile',
        [ReconciliationController::class,'reconcile']
    );
    Route::get('reports/daily',[ReportController::class,'daily']);
    Route::get('reports/monthly',[ReportController::class,'monthly']);
    
});




