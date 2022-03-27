<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FornecedorestController extends Controller
{
    public function index()
    {
        return view("fornecedores.fornecedores.index", $data)
    } //
}

