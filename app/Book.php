<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
  protected $fillable = ['name', 'autor', 'page', 'total_copies', 'available_copies'];

  public function orderDetail(){
    return $this->hasMany('App\OrderDetail');
}
}
