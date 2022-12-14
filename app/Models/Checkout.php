<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Checkout extends Model
{
    protected $guarded = [];
    use HasFactory;

    public function destinations()
    {
        return $this->belongsTo(Destinations::class);
    }
}
