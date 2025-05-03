<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class product extends Model
{
    protected $fillable=[    
    'title',
    'description',
    'event_date_from',
    'event_date_to',
    'time_from',
    'time_to',
    'rating',
    'price',
    'photo',
    'category_id',
    'country_id',
];
    public function category(){
        return $this->belongsTo(Category::class);
    }
    public function country(){
        return $this->belongsTo(country::class);
    }
}
