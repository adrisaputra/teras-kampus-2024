<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Catalog extends Model
{
    use HasFactory;
    protected $fillable =[
        'type',
        'category',
        'title',
        'author',
        'publication_date',
        'desc',
        'selling_price',
        'stock',
        'url',
        'cover',
        'file',
        'count_view',
        'user_id',
    ];

    public function user(){
        return $this->belongsTo('App\Models\User');
    }
    
    public function cart(){
        return $this->hasOne('App\Models\Catalog');
    }
}
