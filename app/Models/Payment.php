<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;


class Payment extends Model
{
    use HasFactory;

    protected $fillable = [
        'control_no',
        'amount',
        'status',
        'payer_name',
        'payer_phone',
        'paid_at'
    ];
}

