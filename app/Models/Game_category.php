<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class game_category extends Model
{
    use HasFactory;
    public function movies()   
    {
        return $this->hasMany(movies::class);
    }
    

}
