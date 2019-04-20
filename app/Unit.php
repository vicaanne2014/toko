<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Unit extends Model
{
    protected $fillable = ['unit'];
    
    public function user()
    {
        return $this->belongsTo(Unit::class);
    }

    public function setUnitAttribute($value) {
        $this->attributes['unit'] = strtolower($value);
    }
}
