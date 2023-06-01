<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    use HasFactory;

    protected $fillable = ['product_id', 'vocher_id', 'user_id', 'subtotal', 'taxes', 'total'];
}
