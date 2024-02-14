<?php

namespace App\Http\Controllers;

use App\Models\Porto;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function main()
    {
        return view('pages/main');
    }

    public function resume()
    {
        $Porto = Porto::all();

        return view('pages/resume', compact(
            'Porto'
        ));
    }

    public function detail(Porto $Porto)
    {
        return view('detailsPorto', compact('Porto'));
    }
}
