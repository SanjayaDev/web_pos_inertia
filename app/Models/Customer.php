<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    use HasFactory;

    /**
     * Fillable
     * 
     * @var array
     */
    protected $fillable = [
        "name", "no_telp", "address"
    ];
}