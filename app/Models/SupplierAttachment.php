<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SupplierAttachment extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'file',
        'supplier_id',
    ];
}
