<?php

namespace App\Models;
use App\Models\Restaurant;
use App\Models\User;
use Illuminate\Database\Eloquent\Model;


class Menu extends Model{

     protected $fillable = ['weekday', 'foodtitle', 'fooddesc', 'foodadditives', 'allergens', 'price'];

            protected $casts = [
            'foodadditives' => 'array',
            'allergens' => 'array',
              ];

            public function restaurant()
        {
            return $this->belongsTo(Restaurant::class);
        }

}
