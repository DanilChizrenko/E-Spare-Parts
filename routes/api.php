<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\BrandsController;
use \App\Http\Controllers\ModelsController;
use \App\Http\Controllers\CategoryController;
use \App\Http\Controllers\SparepartsController;
use \App\Http\Controllers\ManufacturersController;

Route::get('showBrands',[BrandsController::class, 'show']);
Route::post('createBrand',[BrandsController::class, 'create']);
Route::put('updateBrand/{id}',[BrandsController::class,'update']);
Route::delete('deleteBrand/{id}',[BrandsController::class, 'delete']);

Route::get('showModels',[ModelsController::class, 'show']);
Route::post('createModel',[ModelsController::class, 'create']);
Route::put('updateModel/{id}',[ModelsController::class,'update']);
Route::delete('deleteModel/{id}',[ModelsController::class, 'delete']);

Route::get('showCategories',[CategoryController::class, 'show']);
Route::post('createCompoundCategories',[CategoryController::class, 'createCompound']);
Route::post('createCategory',[CategoryController::class, 'create']);
Route::put('updateCategory/{id}',[CategoryController::class,'update']);
Route::delete('deleteCategory/{id}',[CategoryController::class, 'delete']);

Route::get('showSpareParts',[SparepartsController::class, 'show']);
Route::post('createSparePart',[SparepartsController::class, 'create']);
Route::put('updateSparePart/{id}',[SparepartsController::class,'update']);
Route::delete('deleteSparePart/{id}',[SparepartsController::class, 'delete']);

Route::get('showManufacturers',[ManufacturersController::class, 'show']);
Route::post('createManufacturer',[ManufacturersController::class, 'create']);
Route::put('updateManufacturer/{id}',[ManufacturersController::class,'update']);
Route::delete('deleteManufacturer/{id}',[ManufacturersController::class, 'delete']);