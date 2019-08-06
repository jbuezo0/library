<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
  protected $fillable = ['client_id', 'order_number', 'loan_date', 'delivery_date', 'state_order'];


  public function client(){
      return $this->belongsTo('App\Client');

    }

    public function orderDetail(){
      return $this->hasMany('App\OrderDetail');


}
}
