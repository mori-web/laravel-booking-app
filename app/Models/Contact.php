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
      'message',
      'is_status',
      'is_contact_speed',
    ];

    /*------------------------------------------------------------
    リレーション
    ------------------------------------------------------------*/
    public function user() {
      return $this->belongsTo('App\Models\User');
    }
}
