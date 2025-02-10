<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Companies extends Model
{
    const TABLE = "companies";

    protected $table = self::TABLE;

    protected $fillable = [
        'name', 'url'
    ];
}
