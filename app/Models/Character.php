<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Descriptor;
use App\Models\Focus;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Character extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'lastname', 'description'];
    
    public function descriptor() {
        return $this->belongsTo(Descriptor::class);
    }

    public function focus() {
        return $this->belongsTo(Focus::class);
    }
}
