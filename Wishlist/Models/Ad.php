<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ad extends Model
{
    use HasFactory;
    protected $fillable = [
        'company_id',
        'make',
        'model',
        'variant',
        'description',
        'price',
        'company_details',
        'img_one',
        'img_two',
    ];
    public function company()
    {
        return $this->belongsTo(Company::class);
    }
    public function wishlists()
    {
        return $this->hasMany(Wishlist::class);
    }
}
