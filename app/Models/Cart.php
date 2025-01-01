<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    
    use HasFactory;
    protected $fillable =[
        'selling_master_id',
        'product_id',
        'selling',
        'purchase_price',
        'selling_price',
        'qty',
        'discount',
        'total',
        'user_id'
    ];

    public function selling_master(){
        return $this->belongsTo('App\Models\SellingMaster');
    }

    public function catalog(){
        return $this->belongsTo('App\Models\Catalog');
    }
}
