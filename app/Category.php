<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    // protected $table = 'categories';
    // public $timestamps = true;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
    ];
 
    /**
     * Get the waypoints for the category.
     */
    public function waypoints()
    {
        return $this->hasMany('App\Waypoint');
    }
}