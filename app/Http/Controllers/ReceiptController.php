<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ReceiptController extends Controller
{
    public function create()
    {
        return view('receipt.create');
    }

    public function store()
    {
        
    }
}
