<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Textbook extends Model
{
    use HasFactory;
    protected $fillable =[
        'category',
        'title',
        'author',
        'publication_date',
        'desc',
        'cover',
        'file',
        'count_view',
        'user_id',
    ];

    public function user(){
        return $this->belongsTo('App\Models\User');
    }

}
