<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Database\Factories\ProjectFactory;

class Project extends Model
{
    /**
     * @use HasFactory<ProjectFactory>
     */
    use HasFactory;
    
    protected $fillable = [
        'title',
        'description',
        'image',
        'url',
        'github_url',
        'featured',
    ];

    protected $casts = [
        'technologies' => 'array',
        'featured' => 'boolean',
    ];
}
