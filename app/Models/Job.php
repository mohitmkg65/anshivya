<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Support\Str;

class Job extends Model
{
    use HasFactory;

    protected $table = 'job_openings';

    protected $fillable = [
        'title',
        'slug',
        'department',
        'location',
        'type',
        'experience',
        'short_description',
        'responsibilities',
        'requirements',
        'benefits',
        'is_published',
    ];

    protected $casts = [
        'responsibilities' => 'array',
        'requirements' => 'array',
        'benefits' => 'array',
        'is_published' => 'boolean',
    ];

    public static function boot()
    {
        parent::boot();

        static::creating(function ($job) {
            if (empty($job->slug)) {
                $job->slug = Str::slug($job->title).'-'.Str::random(5);
            }
        });
    }

    public function applications(): HasMany
    {
        return $this->hasMany(JobApplication::class, 'job_opening_id');
    }
}
