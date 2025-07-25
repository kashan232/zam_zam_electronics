<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Unit extends Model
{
    use HasFactory;
    use SoftDeletes;

    // In Brand model
    public function products()
    {
        return $this->hasMany(Product::class, 'unit', 'unit');
    }

    public function category()
    {
        return $this->belongsTo(Category::class, 'category_id');
    }

    protected $guarded = [];
}
