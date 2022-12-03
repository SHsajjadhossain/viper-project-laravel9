<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rating extends Model
{
    use HasFactory;
    function relationwithuser(){
        return $this->belongsTo(User::class, 'user_id' , 'id');
    }
}