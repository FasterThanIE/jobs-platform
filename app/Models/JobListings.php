<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class JobListings extends Model
{
    const TABLE = "job_listings";

    protected $table = self::TABLE;

    protected $fillable = [
        'company_id', 'original_url', 'apply_url',
        'status', 'description', 'role',
        'type', 'location', 'published_at',
        'ends_at',
    ];
}
