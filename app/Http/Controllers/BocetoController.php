<?php

namespace App\Http\Controllers;

use App\Models\boceto;
use App\Models\multimedia;
use Illuminate\Http\Request;
use PhpParser\Node\Expr\New_;

class BocetoController extends Controller
{
    public function index() {

        $bocetos = boceto::with('multimedia')->get();
        return view('bocetos.index', compact('bocetos'));
    }

    public function create() {
        return view('bocetos.create');
    }

    public function store(Request $request) {

        $request->validate([
            'nombre_boceto' => 'required',
            'url' => 'required',
        ]);
        $multimedia = New multimedia(['url' => $request->url]);
        $multimedia->save();

        $boceto = new boceto([
            'nombre_boceto' => $request->nombre_boceto,
            'url' => $request->url,
        ]);
        $boceto->multimedia()->associate($multimedia);
        $boceto->save();

        return redirect()->route('bocetos.index');
    }
}
