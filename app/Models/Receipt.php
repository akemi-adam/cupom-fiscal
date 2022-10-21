<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Receipt extends Model
{
    use HasFactory;

    protected $fillable = [
        'total_value',
        'tax',
        'enterprise_id',
        'valid'
    ];

    public function enterprise()
    {
        return $this->belongsTo(Enterprise::class);
    }

    public function products()
    {
        return $this->belongsToMany(Product::class);
    }
}
