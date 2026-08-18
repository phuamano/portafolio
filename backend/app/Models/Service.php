<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Database\Factories\ServiceFactory;


class Service extends Model
{
    /**
     * @use HasFactory<ServiceFactory>
     */
    use HasFactory;
    
    protected $fillable = [
        'number',
        'title',
        'description',
        'sort_order',
        'is_active',
    ];

    protected $casts = [
        'is_active' => 'boolean',
    ];
}
