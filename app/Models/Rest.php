<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rest extends Model
{
    use HasFactory;

    protected $fillable = ['user_id', 'rest_in', 'rest_out'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
