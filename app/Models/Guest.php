<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Guest extends Model
{
    use HasFactory;
    protected $fillable = ['full_name','phone_number','coming_date'];

    public function activities()
    {
        return $this->hasMany(Activity::class);
    }
}


