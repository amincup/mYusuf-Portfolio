<?php

namespace App\Http\Controllers;

use App\Models\Porto;
use Illuminate\Http\Request;

class PortoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $portos = Porto::all();
        return view('resume.portfolio.porto', compact('portos'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('resume.portfolio.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'description' => 'required',
            'type' => 'required',
            'image' => 'required',
        ]);

        $input = $request->all();

        if ($image = $request->file('image')) {
            $destinationPath = 'image/';
            $imageName = date('Ymd_His') . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $imageName);
            $input['image'] = $imageName;
        }

        Porto::create($input);

        return redirect('/porto')->with('message', 'Data successfully added');
    }

    /**
     * Display the specified resource.
     */
    public function show(Porto $Porto)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Porto $Porto)
    {
        return view('resume.portfolio.edit', compact('Porto')); //P nya gede ni jgn lupa
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Porto $Porto)
    {
        $request->validate([
            'title' => 'required',
            'description' => 'required',
            'type' => 'required',
            'image' => 'image',
        ]);

        $input = $request->all();

        if ($image = $request->file('image')) {
            $destinationPath = 'image/';
            $imageName = date('Ymd_His') . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $imageName);
            $input['image'] = $imageName;
        } else {
            unset($input['image']);
        }

        $Porto->update($input);

        return redirect('/porto')->with('message', 'Data successfully edited')->with('titlePage', 'Add Portfolio');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Porto $Porto)
    {
        $Porto->delete();
        return redirect('/porto')->with('message', 'Data deleted');
    }
}
