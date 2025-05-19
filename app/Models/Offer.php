<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Offer extends Model
{
    protected $fillable = [
        'highlight_text',
        'title',
        'subtitle',
        'badge',
        'button_text',
        'button_link',
        'image',
        'is_active',
    ];
}
