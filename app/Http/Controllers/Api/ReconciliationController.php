<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Payment;
use App\Models\Reconciliation;

class ReconciliationController extends Controller
{
    public function reconcile(Request $request, $paymentId)
    {
        $request->validate([
            'external_ref'=>'required',
            'external_amount'=>'required|numeric'
        ]);

        $payment = Payment::findOrFail($paymentId);

        $matched = ($payment->amount == $request->external_amount);

        $rec = Reconciliation::updateOrCreate(
            ['payment_id'=>$payment->id],
            [
                'external_ref'=>$request->external_ref,
                'external_amount'=>$request->external_amount,
                'matched'=>$matched,
                'reconciled_at'=>now()
            ]
        );

        return response()->json([
            'payment'=>$payment,
            'reconciliation'=>$rec,
            'matched'=>$matched
        ]);
    }
}

