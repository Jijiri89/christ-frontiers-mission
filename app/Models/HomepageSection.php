<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class HomepageSection extends Model
{
    protected $fillable = [
    'section_key',
    'title',
    'subtitle',
    'content',
    'button_text',
    'button_link',
    'image',
    'is_active',
];
}
