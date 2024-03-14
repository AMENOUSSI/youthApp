<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Participant extends Model
{
    use HasFactory;
    protected $fillable = ['first_name', 'last_name', 'email','cellule','phone','total_amount','paid_amount','leaving_date'];

    public function activities()
    {
        return $this->hasMany(Activity::class);
    }

}
