<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class History extends Model
{
    use HasFactory;

    public $fillable = ['actor_id', 'body', 'reference_id', 'reference_table'];

    public $table = 'history';
}
