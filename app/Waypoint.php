<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Waypoint extends Model
{
    // protected $table = 'waypoints';
    // public $timestamps = true;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'description', 'address', 'latitude', 'longitude', 'category_id', 
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

    /**
     * Get the category that belongs the waypoint.
     */
    public function category()
    {
        return $this->belongsTo('App\Category');
    }
}
