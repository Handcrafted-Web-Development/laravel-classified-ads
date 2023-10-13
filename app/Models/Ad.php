<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
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
        'description',
        'price',
        'year',
        'size',
        'brand',
        'due_date',
        'guarantee',
        'exchange',
        'author_id'
    ];

    /**
     * Get the author to which the ad is associated.
     */
    public function author(): BelongsTo
    {
        return $this->belongsTo(User::class, 'author_id');
    }
}
