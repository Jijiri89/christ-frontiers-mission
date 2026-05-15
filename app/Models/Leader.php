<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Leader extends Model
{
    protected $fillable = [
    'name',
    'position',
    'bio',
    'image',
    'sort_order',
    'is_active',
];
}
