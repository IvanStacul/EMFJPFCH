<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
  use HasFactory;

  protected $fillable = ['name'];

  public function caseLaws(){
    return $this->hasMany(CaseLaw::class);
  }
}
