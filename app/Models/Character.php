<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Descriptor;
use App\Models\Focus;
use App\Models\Campaign;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Character extends Model
{
    use HasFactory;

    protected $fillable = [
        'name', 
        'type', 
        'tier', 
        'background', 
        'might_pool',
        'speed_pool', 
        'intellect_pool'
    ];
    
    public function descriptor() {
        return $this->belongsTo(Descriptor::class);
    }

    public function focus() {
        return $this->belongsTo(Focus::class);
    }

    public function campaigns() {
        return $this->belongsTo(Campaign::class);
    }
}
