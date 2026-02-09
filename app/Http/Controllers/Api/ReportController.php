<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Payment;
use Illuminate\Http\Request;

class ReportController extends Controller
{
    public function daily(Request $request)
    {
        $date = $request->date ?? now()->toDateString();

        $total = Payment::whereDate('paid_at',$date)
            ->where('status','PAID')
            ->sum('amount');

        return response()->json([
            'date'=>$date,
            'total'=>$total
        ]);
    }

    public function monthly(Request $request)
    {
        $month = $request->month ?? now()->format('Y-m');

        $total = Payment::where('status','PAID')
            ->where('paid_at','like',$month.'%')
            ->sum('amount');

        return response()->json([
            'month'=>$month,
            'total'=>$total
        ]);
    }
}

