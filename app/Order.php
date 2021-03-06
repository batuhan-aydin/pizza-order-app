<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $guarded = [];

    public function basket()
    {
      return $this->belongsTo(Basket::class);
    }
}
