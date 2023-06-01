<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Payment extends Model
{
    use HasFactory;

    protected $fillable = ['product_id', 'vocher_id', 'user_id', 'subtotal', 'taxes', 'total'];

    public function product(): BelongsTo
    {
        return $this->belongsTo(Product::class);
    }

    public function vocher(): BelongsTo
    {
        return $this->belongsTo(Vocher::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
