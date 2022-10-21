<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\{
    Product, Enterprise, Receipt
};
use DB;

class ReceiptController extends Controller
{
    public function create()
    {
        return view('receipt.create', [
            'enterprises' => Enterprise::all(),
            'products' => Product::all(),
        ]);
    }

    public function store(Request $request)
    {
        $total_value = 0;

        foreach ($request->products as $product) {

            $product = Product::findOrFail($product);

            $total_value += ($product->price * current($request->amount));

        }

        $tax = doubleval($request->tax);

        $total_value *= $tax;

        $receipt = Receipt::create([
            'total_value' => $total_value,
            'tax' => $tax,
            'enterprise_id' => $request->enterprise,
            'valid' => 1
        ]);

        foreach ($request->products as $product) {
            $receipt->products()->attach($product);
        }

        return redirect()->to(route('dashboard'))->with('message', 'Nota fiscal cadastrada com sucesso!');
    }
}
