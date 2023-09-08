<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    public function history()
    {
        return $this->morphMany(History::class, 'products', 'reference_table', 'reference_id');
    }
}
