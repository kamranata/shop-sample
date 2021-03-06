<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Brand;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',
        'brand_id',
        'name',
        'price',
    ];

    public function brand() {
    	return $this->belongsTo(Brand::class);
    }
}
