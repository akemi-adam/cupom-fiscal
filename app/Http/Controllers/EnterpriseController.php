<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Enterprise;

class EnterpriseController extends Controller
{
    
    public function create()
    {
        return view('enterprise.create');
    }

    public function store(Request $request)
    {

        $data = \file_get_contents('https://servicodados.ibge.gov.br/api/v1/localidades/estados/' . $request->discrict);

        $discrict = json_decode($data);

        Enterprise::create([
            'name' => $request->name,
            'street' => $request->street,
            'street_number' => $request->street_number,
            'discrict' => $discrict->nome,
            'city' => $request->city,
            'cnpj' => $request->cnpj,
            'ie' => $request->ie,
        ]);

        return redirect()->to(route('enterprise.index'))->with('message', 'Empresa cadastrada com sucesso!');
    }

    public function index()
    {
        $enterprises = Enterprise::all();

        return view('enterprise.index', [
            'enterprises' => $enterprises
        ]);
    }

}
