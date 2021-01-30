<?php

use App\Http\Controllers\HomeController;
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
)->name('subsidios.casamiento');

Route::view(
  'ayuda-solidaria',
  'beneficios.ayuda-solidaria',
  ['title' => 'Ayuda Solidaria']
)->name('ayuda');
