<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Waypoint extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'description', 'latitude', 'longitude', 'category_id', 
    ];

    /*
    public function setNameAttribute($value)
    {
        $this->attributes['name'] = strtolower($value);
    }
    */

    public function fill(array $attributes)
    {
        if(!isset($this->attributes['slug']) || 
           $this->attributes['slug'] == null)
        {
            $this->attributes['slug'] = str_random(5);
        }

        /*
        if (isset($attributes['quantity']))
        {
            $this->setQuantity($attributes['quantity']);
        }
        */
    
        return parent::fill($attributes);
    }
}