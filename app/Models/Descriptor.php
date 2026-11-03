<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use App\Models\Character;

class Descriptor extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'description'];

    public function characters() {
        return $this->hasMany(Character::class);
    }
}
