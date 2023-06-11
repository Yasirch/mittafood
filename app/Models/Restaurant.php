<?php

namespace App\Models;
use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;


class Restaurant extends Model
{

    protected $fillable = [
        'name',
        'user_id',
        'city',
        'postal_code',
        'website_link',
        'logo',
    ];
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function menus()
    {
        return $this->hasMany(Menu::class);
    }
}
