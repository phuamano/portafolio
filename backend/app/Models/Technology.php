<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Database\Factories\TechnologyFactory;


class Technology extends Model
{
    /**
     * @use HasFactory<TechnologyFactory>
     */
    use HasFactory;
    
    protected $fillable = [
        'name',
        'type',
        'slug',
        'icon',
        'sort_order',
        'is_active',
    ];

    protected $casts = [
        'is_active' => 'boolean',
    ];
}
