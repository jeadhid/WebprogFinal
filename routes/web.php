<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DiseaseController;
use App\Http\Controllers\AuthController;
use App\Models\Disease;


//authentication
Route::get('/login', [AuthController::class, 'login'])->name('login');
Route::post('/dologin', [AuthController::class, 'doLogin'])->name('dologin');
Route::get('/logout', [AuthController::class, 'logout'])->name('logout');

// guest view
Route::get('/categories',[DiseaseController::class,'categories'])->name('disease.category');
Route::get('/{category_id?}',[DiseaseController::class,'home'])->name('disease');
Route::get('/detail/{disease}',[DiseaseController::class,'detail'])->name('disease.detail');

Route::get('/search', [DiseaseController::class, 'search'])->name('search');

// admin panel
Route::get('/admin/add-disease', [DiseaseController::class, 'showAddForm'])->name('disease-form');
Route::post('/admin/add-disease', [DiseaseController::class, 'create'])->name('disease-add');

Route::get('/admin/edit-disease/{disease}', [DiseaseController::class, 'edit'])->name('disease.edit');
Route::put('/admin/update-disease/{id}', [DiseaseController::class, 'update'])->name('disease.update');

Route::delete('/admin/delete-disease/{id}', [DiseaseController::class, 'delete'])->name('disease.delete');
