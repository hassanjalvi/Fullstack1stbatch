<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OurChefModel extends Model
{
    use HasFactory;
    
    protected $table = "chef";
    protected $primary_key = "id";

}
