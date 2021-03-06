<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FotoPengantin extends Model
{
  use HasFactory;
  protected $guarded = [];

  public function pesanan()
  {
    return $this->hasOne(Pesanan::class);
  }
}
