<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    protected $fillable = ["name", "slug", "description", "thumbnail"];

    public function productTypes()
    {
        return $this->hasMany(ProductType::class);
    }
}
