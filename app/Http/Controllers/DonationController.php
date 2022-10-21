<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\{
    Institution, Receipt
};
use DB;

class DonationController extends Controller
{
    public function create()
    {
        return view('donation.create', [
            'receipts' => Receipt::where('valid', 1)->get(),
            'institutions' => Institution::all(),
        ]);
    }

    public function store(Request $request)
    {
        $receipt = Receipt::find($request->receipt);

        $institution = Institution::find($request->institution);

        $receipt->valid = 0;

        $receipt->save();

        $value = $receipt->total_value * 0.02;

        DB::table('donations')->insert([
            'value' => $value,
            'receipt_id' => $receipt->id,
            'institution_id' => $institution->id
        ]);

        return redirect()->to(route('donation.create'))->with('success', 'Doação feita com sucesso!');
    }
}
