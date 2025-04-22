<?php

use App\Http\Controllers\RuanganController;

Route::get('/ruangan', [RuanganController::class, 'index']);

