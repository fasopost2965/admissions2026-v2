<?php

use Illuminate\Support\Facades\Route;
use App\Livewire\InscriptionWizard;

Route::get("/", function () {
    return view("welcome");
});

Route::get("/inscription", InscriptionWizard::class)->name("inscription.wizard");
