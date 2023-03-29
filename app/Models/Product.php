<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Product extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'name',
        'description',
        'price',
        'image_url',
        'brand',
        'model',
        'category_id',
        'deleted_at',
    ];

    public function category() {
        return $this->belongsTo(Category::class)->withTrashed();
    }
}
