<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Dream extends Model
{
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
