<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Enterprise;

class Receipt extends Model
{
    use HasFactory;

    public function enterprise()
    {
        return $this->belongsTo(Enterprise::class);
    }
}
