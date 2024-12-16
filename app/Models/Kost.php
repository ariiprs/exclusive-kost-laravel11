<?php

namespace App\Models;

use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\SoftDeletes;

class Kost extends Model
{
    use HasFactory, SoftDeletes;

     protected $fillable = [
        'name',
        'slug',
        'thumbnail',
        'about',
        'price',
        'is_popular',
        'category_id',
        'location_id',
    ];

     public function setNameAttribute($value)
    {
        $this->attributes['name'] = $value; //air jordan flying
        $this->attributes['slug'] = Str::slug($value); //air-jordan-flying
    }

    public function location(): BelongsTo
    {
        return $this->belongsTo(Location::class, 'location_id');
    }

    public function category(): BelongsTo
    {
        return $this->belongsTo(Category::class, 'category_id');
    }

    public function photos():HasMany
    {
        return $this->hasMany(KostPhoto::class);
    }
}
