<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class OrderDetail extends Model
{
  protected $fillable = ['quantity', 'book_id', 'order_id'];



  public function order(){
      return $this->belongsTo('App\Order');

    }
    public function book(){
        return $this->belongsTo('App\Book');

      }


}
