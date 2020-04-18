<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;
use Laravel\Scout\Searchable;

class Dream extends Model
{
    use Searchable;

    /**
     * The attributes that should be cast.
     *
     * @var array
     */
    protected $casts = [
        'dreamed_on' => 'date',
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function location()
    {
        return $this->belongsTo(Location::class);
    }

    /**
     * Scope a query to only include popular users.
     *
     * @param  \Illuminate\Database\Eloquent\Builder  $query
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function scopePublished($query)
    {
        return $query->where('published', true);
    }

    /**
     * Get the indexable data array for the model.
     *
     * @return array
     */
    public function toSearchableArray()
    {
        return [
            'id' => $this->id,
            'description' => $this->tagless_description,
            'location' => $this->location ? $this->location->name : null,
        ];
    }

    /**
     * @return string
     */
    public function getTaglessDescriptionAttribute()
    {
        return strip_tags($this->description);
    }

    /**
     * @return string
     */
    public function getHintAttribute()
    {
        return Str::limit($this->tagless_description, 50);
    }
}
