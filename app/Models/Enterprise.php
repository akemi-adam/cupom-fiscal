<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Receipt;

class Enterprise extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'street',
        'street_number',
        'discrict',
        'city',
        'cnpj',
        'ie'
    ];

    public $timestamps = false;

    public function receipts()
    {
        return $this->hasMany(Receipt::class);
    }
}
