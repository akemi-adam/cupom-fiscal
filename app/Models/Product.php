<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'aliquot',
        'price',
        'inventory'
    ];

    public $timestamps = false;

    public function receipts()
    {
        return $this->belongsToMany(Receipt::class);
    }
}
