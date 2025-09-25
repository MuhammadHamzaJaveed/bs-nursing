<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class CollegePreference extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var string[]
     */
    protected $fillable = [
        'college_pref',
        'user_id',
        'is_mbbs',
        'is_foreigner',
        'is_open_merit_seat',
    ];

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}
