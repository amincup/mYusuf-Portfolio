<?php

namespace App\Http\Controllers;

use App\Models\Image;
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
        return view('admin.portfolio.porto', compact('portos'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.portfolio.create');
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
            'thumb' => 'required',
        ]);

        $input = $request->all();

        if ($image = $request->file('thumb')) {
            $destinationPath = 'thumb/';
            $imageName = date('Ymd_His') . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $imageName);
            $input['thumb'] = $imageName;
        }

        Porto::create($input);

        return redirect('/porto')->with('message', 'Data successfully added');
    }

    public function storeImg(Request $request)
    {
        $data = $request->validate([
            'image' => 'required',
        ]);

        $input = Porto::create($data);

        if ($request->has('image')) {
            foreach ($request->file('image') as $image) {
                $imageName = $data['title'] . "-" . date('Ymd_His') . "-" . rand(1, 1000) . "." . $image->getClientOriginalExtension();
                $destinationPath = 'thumb/';
                $image->move($destinationPath, $imageName);
                Image::create([
                    'porto_id' => $input->id,
                    'image' => $imageName
                ]);
            }
        }

        return redirect('/porto')->with('message', 'Data successfully added');
    }

    public function images(Request $request, $id) //hanya buat nampilin bkn crud
    {
        $Porto = Porto::find($id);
        if (!$Porto) abort(404);
        $images = $Porto->images;
        return view('admin.portfolio.images', compact('Porto', 'images')); //jd yg dlm compact ini adalah variabel yg akan di bawa ke halaman images.blade
    }

    public function removeImg($id)
    {
        $image = Image::find($id);
        if (!$image) abort(404);
        unlink(public_path('image/' . $image->image));
        $image->delete();
        return back()->with('message', 'Image Removed');
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
        return view('admin.portfolio.edit', compact('Porto')); //P nya gede ni jgn lupa
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
        ]);

        $input = $request->all();

        if ($thumb = $request->file('thumb')) {
            $destinationPath = 'thumb/';
            $thumbName = date('Ymd_His') . "." . $thumb->getClientOriginalExtension();
            $thumb->move($destinationPath, $thumbName);
            $input['thumb'] = $thumbName;
        } else {
            unset($input['thumb']);
        }

        $Porto->update($input);

        return redirect('/porto')->with('message', 'Data successfully edited')->with('titlePage', 'Add Portfolio');
    }

    public function updateImg(Request $request, $id)
    {
        $imageEdit = Porto::find($id);
        if (!$imageEdit) abort(404);
        if ($request->has('image')) {
            foreach ($request->file('image') as $image) {
                $imageName = $imageEdit['title'] . "-" . date('Ymd_His') . "-" . rand(1, 1000) . "." . $image->getClientOriginalExtension();
                $destinationPath = 'image/';
                $image->move($destinationPath, $imageName);
                Image::create([
                    'porto_id' => $imageEdit->id,
                    'image' => $imageName
                ]);
            }
        }

        return redirect()->route('porto.images', ['id' => $id])->with('message', 'Data successfully edited');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $porto = Porto::find($id);
        if (!$porto) {
            abort(404);
        }

        //apus associated images
        foreach ($porto->images as $image) {
            unlink(public_path('image/' . $image->image));
            $image->delete();
        }

        //apus thumb image
        unlink(public_path('thumb/' . $porto->thumb));
        $porto->delete();

        return redirect('/porto')->with('message', 'Data and associated images deleted');
    }
}
