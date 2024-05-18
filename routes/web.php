<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\TemplateController;
use App\Http\Controllers\CampaignController;
use App\Http\Controllers\AudienceController;




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
    Route::get('manageAudience',[AudienceController::class,'index']);
    Route::post('addAudience',[AudienceController::class,'add']);
    Route::get('delAudience/{id}',[AudienceController::class,'delete']);
    Route::get('manageBancoStaffContacts',[ContactController::class,'BancoStaff']);
    Route::post('addBancoStaff',[ContactController::class,'AddBancoStaff']);
    Route::get('manageDealerContacts',[ContactController::class,'Dealer']);
    Route::post('addDealer',[ContactController::class,'AddDealer']);
    Route::get('manageDistributorContacts',[ContactController::class,'Distributor']);
    Route::post('addDistributor',[ContactController::class,'AddDistributor']);
});