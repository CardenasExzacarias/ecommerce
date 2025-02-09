<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Sale extends Model
{
    use HasFactory;
    protected $fillable = [
        'product_id',
        'ticket_id',
        'sell_price',
        'buy_cost',
        'quantity',
    ];

    public $timestamps = false;

    public function tickets(): BelongsTo
    {
        return $this->belongsTo(Ticket::class);
    }

    public function products(): BelongsTo
    {
        return $this->belongsTo(Product::class);
    }
}
