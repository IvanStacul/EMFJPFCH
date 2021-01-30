<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Str;

class User extends Authenticatable
{
  use HasFactory, Notifiable;

  /**
   * The attributes that are mass assignable.
   *
   * @var array
   */
  protected $fillable = [
    'name',
    'email',
    'password',
  ];

  /**
   * The attributes that should be hidden for arrays.
   *
   * @var array
   */
  protected $hidden = [
    'password',
    'remember_token',
  ];

  /**
   * The attributes that should be cast to native types.
   *
   * @var array
   */
  protected $casts = [
    'email_verified_at' => 'datetime',
  ];

  /**
   * Activate the user.
   */
  public function activate(){

    // Activamos el usuario asociado al token
    $this->active = true;

    $this->update();

    //Borramos el token de la tabla porque ya no lo necesitamos
    $this->token->delete();
  }

  public function token(){
    return $this->hasOne(ActivationToken::class);
  }

  public function generateToken(){

    $this->token()->create([
      'token' => Str::random(100),
      'created_at' => now(),
    ]);

    return $this;
  }

}
