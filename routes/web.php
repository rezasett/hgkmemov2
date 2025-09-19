<?php

use Illuminate\Support\Facades\Route;
use App\Livewire\Home;
use App\Livewire\PreEngagement\ClientProspectData;
use App\Livewire\PreEngagement\ClientProspectResult;
use App\Livewire\AuditorDashboard\AuditorDashboard;
use App\Livewire\Preengagement\ClientProspectData0;
use App\Livewire\Preengagement\ClientProspectData1;
use App\Livewire\Preengagement\ClientProspectData2;


Route::get('/home', Home::class)->name('livewire.home');
Route::get('/ClientProspectData', ClientProspectData::class)->name('livewire.pre-engagement.client-prospect-data');
Route::get('/ClientProspectResult', ClientProspectResult::class)->name('livewire.pre-engagement.client-prospect-result');
Route::get('/AuditorDashboard', AuditorDashboard::class)->name('livewire.auditor-dashboard.auditor-dashboard');
Route::get('/ClientProspectData0', ClientProspectData0::class)->name('livewire.pre-engagement.client-prospect-data0');
Route::get('/ClientProspectData1', ClientProspectData1::class)->name('livewire.pre-engagement.client-prospect-data1');
Route::get('/ClientProspectData2', ClientProspectData2::class)->name('livewire.pre-engagement.client-prospect-data2');
