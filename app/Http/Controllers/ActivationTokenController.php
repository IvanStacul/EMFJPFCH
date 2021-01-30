<?php

namespace App\Http\Controllers;

use App\Mail\AccountActivation;
use App\Models\ActivationToken;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ActivationTokenController extends Controller
{
  public function activate(ActivationToken $token){
    $token->user->activate();

    // Una vez activado el usuario, enviamos un mail a el mismo
    // indicando que ya puede iniciar sesion
    // Mail::to('ivans@criptext.com')->send(new AccountActivation($token->user));

    // volvemos a la ruta de login para informar que se activo
    // con éxito el usuario al administrador
    return redirect('login')->with('info','El usuario fue activado con éxito');
  }
}
