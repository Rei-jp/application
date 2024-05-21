<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class movies extends Model
{
    use HasFactory;
    
    // Categoryに対するリレーション

//「1対多」の関係なので単数系に
    public function game_category()
    {
        return $this->belongsTo(game_category::class);
    }
}
