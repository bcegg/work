<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Attendance extends Model
{
    use HasFactory;

    protected $fillable = ['user_id','date','begin','finish'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
