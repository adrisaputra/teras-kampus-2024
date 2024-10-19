<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Conference extends Model
{

    use HasFactory;
    protected $fillable =[
        'title',
        'location',
        'start_date',
        'end_date',
        'desc',
        'user_id',
    ];

    public function user(){
        return $this->belongsTo('App\Models\User');
    }

}
