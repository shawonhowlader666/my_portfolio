<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Project
 * 
 * Represents a portfolio project.
 *
 * @property int $id
 * @property string $title
 * @property string $slug
 * @property string|null $description
 * @property array|null $tech_stack
 * @property string|null $image
 * @property string|null $github_link
 * @property string|null $live_link
 * @property int $sort_order
 * @property bool $featured
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * 
 * @package App\Models
 */
class Project extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'title',
        'slug',
        'description',
        'tech_stack',
        'image',
        'github_link',
        'live_link',
        'sort_order',
        'featured',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'tech_stack' => 'array',
        'featured' => 'boolean',
        'sort_order' => 'integer',
    ];
}
