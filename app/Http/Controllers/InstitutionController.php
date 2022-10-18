<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Institution;

class InstitutionController extends Controller
{

    public function create()
    {
        return view('institution.create');
    }

    public function store(Request $request)
    {
        Institution::create([
            'institution' => $request->institution,
        ]);

        return redirect()->to(route('dashboard'))->with('message', 'Instituição cadastrada com sucesso');
    }

}
