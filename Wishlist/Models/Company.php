<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id',
        'name',
        'email',
        'phone',
        'address',
        'image',
        'city',
    ];
    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function ads()
    {
        return $this->hasMany(Ad::class);
    }
    
}
