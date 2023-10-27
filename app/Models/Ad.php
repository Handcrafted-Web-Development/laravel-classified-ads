<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Model;

class Ad extends Model
{
    use HasFactory;

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'ads';

    /**
     * The attributes that are mass assignable.
     *
     * @var array<string, integer, boolean >
     */
    protected $fillable = [
        'title',
        'brand',
        'price',
        'year',
        'size',
        'description',
        'guarantee',
        'due_date',
        'author_id',
        'picture_id',
        'category_name',
        'delivery_name',
        'state_name'
    ];

    /**
     * Get the author to which the ad is associated.
     */
    public function author(): BelongsTo
    {
        return $this->belongsTo(User::class, 'author_id');
    }

    /**
     * Get the pictures for the classified ads.
     */
    public function pictures(): HasMany
    {
        return $this->hasMany(Picture::class, 'picture_id');
    }
}
