<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Activity extends Model
{
    use HasFactory;
    protected $fillable = ['name','commission_id','guest_id','user_id','participant_id'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function participant()
    {
        return $this->belongsTo(Participant::class);
    }

    public function guest()
    {
        return $this->belongsTo(Guest::class);
    }

    public function commission()
    {
        return $this->belongsTo(Commission::class);
    }
}
