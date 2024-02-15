<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Products extends Model
{
    // public $timestamps = false;

    use HasFactory;
    protected $table = "products";
    protected $primarykey = "id";

}
