<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ContactEnquiry extends Model
{
    use HasFactory;

    protected $fillable = [
        'full_name',
        'company_name',
        'work_email',
        'phone_number',
        'service_required',
        'employee_count',
        'message',
        'status',
    ];
}
