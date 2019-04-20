<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Unit extends Model
{
    protected $fillable = ['unit'];
    
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function setUnitAttribute($value) 
    {
        $this->attributes['unit'] = strtolower($value);
    }

    public function getUrlAttribute() 
    {
        return route('units.show', $this->id);
    }
    
    public function getCreatedDateAttribute() 
    {
        return $this->created_at->diffForHumans();
    }
}
