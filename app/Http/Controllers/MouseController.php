<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MouseController extends Controller
{
    public function index()
    {
        $data = DB::table('mouse')->get();
        return view('mouse.index', compact('data'));
    }

    public function create()
    {
        return view('mouse.create');
    }

    public function store(Request $request)
    {
        DB::table('mouse')->insert([
            'merkmouse'  => $request->merkmouse,
            'stockmouse' => $request->stockmouse,
            'tersedia'   => $request->tersedia,
        ]);

        return redirect()->route('mouse.index');
    }

    public function edit($id)
    {
        $mouse = DB::table('mouse')->where('kodemouse', $id)->first();
        if (!$mouse) abort(404);
        return view('mouse.edit', compact('mouse'));
    }

    public function update(Request $request, $id)
    {
        DB::table('mouse')->where('kodemouse', $id)->update([
            'merkmouse'  => $request->merkmouse,
            'stockmouse' => $request->stockmouse,
            'tersedia'   => $request->tersedia,
        ]);

        return redirect()->route('mouse.index');
    }

    public function destroy($id)
    {
        DB::table('mouse')->where('kodemouse', $id)->delete();
        return redirect()->route('mouse.index');
    }
}