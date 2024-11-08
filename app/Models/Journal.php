<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Journal extends Model
{
    use HasFactory;
    protected $fillable =[
        'title',
        'author',
        'publication_date',
        'volume',
        'issue',
        'page_range',
        'doi',
        'issn',
        'desc',
        'cover',
        'file',
        'url',
        'count_view',
        'user_id',
    ];

    public function user(){
        return $this->belongsTo('App\Models\User');
    }

}
