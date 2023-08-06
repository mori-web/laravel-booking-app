<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    use HasFactory;

    protected $fillable = [
      'title',
      'name',
      'email',
      'memo',
      'message',
      'status',
      'contact_speed',
    ];

    /*------------------------------------------------------------
    リレーション
    ------------------------------------------------------------*/
    public function user() {
      return $this->belongsTo('App\Models\User');
    }
}
