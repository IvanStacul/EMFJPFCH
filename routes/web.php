<?php

use App\Http\Controllers\AmountsController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'index'])
  ->name('home');

Route::post('contact', [HomeController::class, 'sendMail'])
  ->name('contact');


// ------------------ONLY VIEWS ROUTES------------------

// BENEFITS & INFORMATION ROUTES

Route::view(
  'convenio-hoteles',
  'beneficios.hoteles-convenios',
  ['title' => 'Convenio con hoteles']
)->name('hoteles.convenios');

Route::view(
  'hoteles-y-precios',
  'beneficios.hoteles-precios',
  ['title' => 'Hoteles asociados y precios']
)->name('hoteles.precios');

Route::view(
  'becas',
  'beneficios.becas',
  ['title' => 'Becas']
)->name('becas');

Route::view(
  'subsidios/nacimientos',
  'beneficios.subsidios-nacimientos',
  ['title' => 'Subsidios por nacimiento']
)->name('subsidios.nacimientos');

Route::view(
  'subsidios/casamiento',
  'beneficios.subsidios-casamiento',
  ['title' => 'Subsidios por matrimonio']
)->name('subsidios.matrimonio');

Route::view(
  'ayuda-solidaria',
  'beneficios.ayuda-solidaria',
  ['title' => 'Ayuda Solidaria']
)->name('ayuda');


// REGLAMENTOS BENEFICIOS

Route::view(
  'reglamentos/subsidios/ayuda-solidaria',
  'reglamentos.ayuda',
  ['title' => 'Reglamento de la ayuda solidaria']
)->name('reglamentos.subsidios.ayuda');

Route::view(
  'reglamentos/becas',
  'reglamentos.becas',
  ['title' => 'Reglamento de las becas de especialización']
)->name('reglamentos.becas');

Route::view(
  'reglamentos/subsidios/matrimonio',
  'reglamentos.matrimonio',
  ['title' => 'Reglamento del servicio del subsidio por matrimonio']
)->name('reglamentos.subsidios.matrimonio');

Route::view(
  'reglamentos/subsidios/nacimientos',
  'reglamentos.nacimientos',
  ['title' => 'Reglamento del servicio del subsidio por nacimiento']
)->name('reglamentos.subsidios.nacimientos');


// NAVBAR ROUTES

Route::view(
  'circunscripciones',
  'circunscripciones',
  ['title' => 'Circunscripciones']
)->name('circunscripciones');


// ATAJOS

Route::view(
  'balance',
  'atajos.balance',
  ['title' => 'Balances']
)->name('balances');

Route::get(
  'montos',
  AmountsController::class
)->name('montos');

Auth::routes();
