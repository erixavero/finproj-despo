<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
  protected $table="transactions";
  protected $fillable=["customer_id","item_id","qty","total_price"];
  protected $guarded=[];

  //declare relations to perhaps get item name and price
  public function items(){
    return $this->belongsTo("App\Models\Item","item_id");
  }
  public function customer(){
    return $this->belongsTo("App\Models\User","customer_id");
  }
}
