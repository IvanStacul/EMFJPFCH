<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AmountsController extends Controller
{
  /**
   * Handle the incoming request.
   *
   * @param  \Illuminate\Http\Request  $request
   * @return \Illuminate\Http\Response
   */
  public function __invoke(Request $request)
  {
    $montos = [
      ['categoria' => 'JUZGADO DE PAZ LETRADO', 'tabla1' => 0.5, 'tabla2' => 0.7, 'tabla3' => 20],
      ['categoria' => 'JUZGADO DE PAZ DE 1º CATEGORIA ESPECIAL', 'tabla1' => 0.45, 'tabla2' => 0.65, 'tabla3' => 18],
      ['categoria' => 'JUZGADO DE PAZ DE 1º CATEGORIA', 'tabla1' => 0.4, 'tabla2' => 0.6, 'tabla3' => 16],
      ['categoria' => 'JUZGADO DE PAZ DE 2º CATEGORIA', 'tabla1' => 0.35, 'tabla2' => 0.55, 'tabla3' => 14],
      ['categoria' => 'JUZGADO DE PAZ DE 3º CATEGORIA', 'tabla1' => 0.30, 'tabla2' => 0.50, 'tabla3' => 12],
    ];

    $title = 'Competencias y montos';

    $SMVM = 16875;

    return view('atajos.montos', compact('title', 'SMVM' , 'montos'));
  }
}
