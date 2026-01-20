<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PurchaseHistory;

class DashboardController extends Controller
{
    public function purchaseHistory()
    {
        $purchaseHistory = PurchaseHistory::all();
        return response()->json($purchaseHistory);
    }
}
