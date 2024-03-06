<?php

namespace App\Http\Controllers;

use App\Models\Image;
use App\Models\Porto;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function main()
    {
        return view('pages/main');
    }

    public function resume(Porto $id)
    {

        $Porto = Porto::all();

        return view('pages.resume', compact(
            'Porto'
        ));
    }

    public function detail($id)
    {
        $Porto = Porto::find($id);
        if (!$Porto) abort(404);
        $images = $Porto->images;
        return view('pages.detailsPorto', compact('Porto', 'images')); //jd yg dlm compact ini adalah variabel yg akan di bawa ke halaman detailsPorto.blade
    }
}
