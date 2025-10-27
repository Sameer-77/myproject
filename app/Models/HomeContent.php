<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HomeContent extends Model
{
    use HasFactory;

    protected $fillable = ['key', 'title', 'description', 'image'];

    // convenience: get by key with default fallback
    public static function getByKey(string $key, $default = null)
    {
        $item = static::where('key', $key)->first();
        return $item ?? $default;
    }
}
