<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    use HasFactory;

    // $fillableは「新規投稿」と「更新時」にも活用される
    protected $fillable = [
      'title',
      'name',
      'email',
      'message',
      'is_status',
      'is_contact_speed',
      'memo',
    ];

    /*------------------------------------------------------------
    リレーション
    ------------------------------------------------------------*/
    public function user() {
      return $this->belongsTo('App\Models\User');
    }
}
