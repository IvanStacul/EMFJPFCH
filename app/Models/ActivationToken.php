<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ActivationToken extends Model
{
  use HasFactory;
  protected $fillable = ['user_id','token','created_at'];
  protected $primaryKey = 'token';
  protected $dates = ['created_at'];
  public $incrementing = false;
  public $timestamps = false;

  public function user(){
    return $this->belongsTo(User::class);
  }
}
