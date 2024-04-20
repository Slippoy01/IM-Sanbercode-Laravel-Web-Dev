<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class CastController extends Controller
{
    public function create() {
        return view('cast.create');
    }

    public function store(Request $request) {
        // Validasi data
        $request->validate([
            'name' => 'required|max:255',
            'age' => 'required|integer',
            'bio' => 'required',
        ]);

        DB::table('cast')->insert([
            'name' => $request->input('name'),
            'age' => $request->input('age'),
            'bio' => $request->input('bio')
        ]);

        return redirect('/cast');
        
    }

    public function index() {
        $casts = DB::table('cast')->select('id', 'name', 'age')->get();
        return view('cast.view', ['casts' => $casts]);
    }

    public function show($id) {
        $cast = DB::table('cast')->where('id', $id)->first();
        if (!$cast) {
            return redirect('/cast')->with('error', 'Cast member not found.');
        }
        return view('cast.show', ['cast' => $cast]);
    }    

    public function edit($id) {
        $cast = DB::table('cast')->where('id', $id)->first();
        if (!$cast) {
            return redirect('/cast')->with('error', 'Cast member not found.');
        }
        return view('cast.edit', compact('cast'));
    }

    public function update(Request $request, $id) {
        $request->validate([
            'name' => 'required|max:255',
            'age' => 'required|integer',
            'bio' => 'required',
        ]);
    
        $affected = DB::table('cast')
                      ->where('id', $id)
                      ->update([
                          'name' => $request->input('name'),
                          'age' => $request->input('age'),
                          'bio' => $request->input('bio'),
                      ]);
    
        if ($affected) {
            return redirect('/cast')->with('success', 'Cast member updated successfully.');
        } else {
            return back()->with('error', 'Failed to update cast member.');
        }
    }
    
    public function destroy($id) {
        $deleted = DB::table('cast')->where('id', $id)->delete();
    
        if ($deleted) {
            return redirect('/cast')->with('success', 'Cast member deleted successfully.');
        } else {
            return back()->with('error', 'Failed to delete cast member.');
        }
    }    
    
}
