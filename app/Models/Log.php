<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Activitylog\Traits\LogsActivity;

class Log extends Model
{
    protected $table = 'activity_log';
	
    public function user(){
        return $this->belongsTo(User::class, 'causer_id');
    }
    
}
