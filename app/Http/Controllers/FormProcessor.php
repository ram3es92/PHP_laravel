<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FormProcessor extends Controller
{
    public function index()
    {
        return view('userform'); // Ссылаемся на Blade-шаблон
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'name' => 'required|string|max:255',
            'surname' => 'required|string|max:255',
            'email' => 'required|email|max:255',
        ]);
        return view('hallo', [
            'name' => $data['name'],
            'surname' => $data['surname'],
            'email' => $data['email'],
        ]);
    }
}