<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class JobApplication extends Model
{
    use HasFactory;

    protected $fillable = [
        'job_opening_id',
        'job_title',
        'candidate_name',
        'candidate_email',
        'candidate_phone',
        'cover_message',
        'resume_path',
        'status',
    ];

    public function job(): BelongsTo
    {
        return $this->belongsTo(Job::class, 'job_opening_id');
    }
}
