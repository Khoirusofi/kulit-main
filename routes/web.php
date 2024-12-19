<?php

use App\Livewire\DiagnosaWizard;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProdukController;

Route::get('/', [ProdukController::class, 'index'])->name('welcome');

Route::get('/diagnosis', DiagnosaWizard::class)->name('diagnosis');
