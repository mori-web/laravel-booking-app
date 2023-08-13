<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletes;


class Plan extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $fillable = [
      'name',
      'price',
      'image',
      'description',
      'deleted_at'
    ];

    /*-------------------------------------
    ローカルスコープ
    -------------------------------------*/
    //1000円以上のプランを取得
    public function scopePrice(Builder $query): Builder
    {
        return $query->where('price', '>=', 1000);
    }
}
