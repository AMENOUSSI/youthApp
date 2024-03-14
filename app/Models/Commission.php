<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Commission extends Model
{
    use HasFactory;

    protected $fillable = ['name','member_id'];

    public function members()
    {
        return $this->hasMany(Member::class);
    }

    public function activities()
    {
        return $this->hasMany(Activity::class);
    }

    
}
