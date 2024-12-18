<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Artist extends Model
{
    use HasFactory, SoftDeletes;

    public function songs(): \Illuminate\Database\Eloquent\Relations\HasMany
    {
        return $this->hasMany(Song::class);
    }
}
