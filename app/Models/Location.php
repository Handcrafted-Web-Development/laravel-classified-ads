<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Model;

class Location extends Model
{
    use HasFactory;

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'locations';

    /**
     * The attributes that are mass assignable.
     *
     * @var array<string, integer>
     */
    protected $fillable = [
        'latitude',
        'longitude',
        'town',
        'zip_code',
        'country'
    ];

    /**
     * Get the locations for the classified ads.
     */
    public function locations(): HasMany
    {
        return $this->hasMany(Ad::class);
    }
}
