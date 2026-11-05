<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use App\Models\Character;

class Campaign extends Model
{
    use HasFactory;

    protected $fillable = 
    [
        'title',
        'desc',
        'is_active'
    ];

    public function characters() {
        return $this->hasMany(Character::class);
    }
}
