<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\TemplateController;
use App\Http\Controllers\CampaignController;




Route::get('/', [LoginController::class, 'index']);
Route::post('/login',[LoginController::class,'login']);


Route::middleware('auth')->group(function () {
    Route::get('dashboard',[DashboardController::class,'index']);
    Route::get('logout',[LoginController::class,'logout']);
    Route::get('manageUsers',[UserController::class,'index']);
    Route::post('addUser',[UserController::class,'add']);
    Route::get('delUser/{id}',[UserController::class,'delete']);
    Route::get('manageMechanicContacts',[ContactController::class,'mechanic']);
    Route::post('addMechanic',[ContactController::class,'add_mechanic']);
    Route::get('managePremiumDealerContacts',[ContactController::class,'PremiumDealer']);
    Route::post('addPremiumDealer',[ContactController::class,'AddPremiumDealer']);
    Route::get('manageTemplates',[TemplateController::class,'index']);
    Route::post('addTemplate',[TemplateController::class,'add']);
    Route::get('delTemp/{id}',[TemplateController::class,'delete']);
    Route::get('manageCampaigns',[CampaignController::class,'index']);
    Route::post('addCampaign',[CampaignController::class,'AddCampaign']);

});