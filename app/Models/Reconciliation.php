<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;


class Reconciliation extends Model
{
    use HasFactory;

    protected $fillable = [
        'payment_id',
        'external_ref',
        'external_amount',
        'matched',
        'reconciled_at'
    ];

    public function payment()
    {
        return $this->belongsTo(Payment::class);
    }
}

