<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    protected $fillable = ['name'];

    public function suppliers()
    {
        return $this->hasMany(Supplier::class);
    }

    public function means()
    {
        return $this->hasMany(Mean::class);
    }
}
