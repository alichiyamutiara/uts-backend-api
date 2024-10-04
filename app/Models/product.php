<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Product extends Model
{
    use HasFactory;
    protected $fillable = [
        'category_id',
        'product',
        'description',
        'price',
        'stcok',
        'image',
    ];

    public function categories(): BelongsTo
    {
        return $this->belongsTo(categories::class);
    }
}