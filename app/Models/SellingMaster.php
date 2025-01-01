<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SellingMaster extends Model
{
    use HasFactory;
    protected $fillable =[
        'transaction_number',
        'status',
        'method',
        'credit_number',
        'date',
        'time',
        'pasy_cost',
        'total_price',
        'user_id'
    ];

    public function selling($category = null)
    {
        return $this->hasMany('App\Models\Selling')->when($category, function ($query) use ($category) {
            return $query->where('category', $category);
        });
    }

    public function user()
    {
        return $this->belongsTo('App\Models\User');
    }
}
