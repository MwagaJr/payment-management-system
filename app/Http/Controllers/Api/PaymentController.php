<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Payment;
use Illuminate\Http\Request;

class PaymentController extends Controller
{
    public function index(Request $request)
    {
        $query = Payment::query();

        // Search by control number
        if ($request->has('control_no')) {
            $query->where('control_no', 'like', '%' . $request->control_no . '%');
        }

        // Filter by status
        if ($request->has('status')) {
            $query->where('status', $request->status);
        }

        return response()->json(
            $query->latest()->paginate(20)
        );
    }

    public function store(Request $request)
    {
        $request->validate([
            'control_no'=>'required|unique:payments',
            'amount'=>'nullable|numeric',
            'payer_name'=>'nullable|string',
            'payer_phone'=>'nullable|string'
        ]);

        $payment = Payment::create([
            'control_no'=>$request->control_no,
            'amount'=>$request->amount,
            'payer_name'=>$request->payer_name,
            'payer_phone'=>$request->payer_phone,
        ]);

        return response()->json($payment, 201);
    }

    public function show($id)
    {
        return Payment::findOrFail($id);
    }

    public function update(Request $request, $id)
    {
        $payment = Payment::findOrFail($id);

        $request->validate([
            'amount'=>'nullable|numeric',
            'status'=>'in:PENDING,PAID,FAILED,REVERSED'
        ]);

        if ($request->status === 'PAID') {
            $payment->paid_at = now();
        }

        $payment->update($request->all());

        return response()->json($payment);
    }
}

