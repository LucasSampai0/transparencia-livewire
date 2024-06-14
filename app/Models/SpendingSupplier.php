<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SpendingSupplier extends Model
{
    use HasFactory;

    protected $fillable = [
        'date',
        'total',
        'category_id',
        'client_id',
        'supplier_id'
    ];
}
