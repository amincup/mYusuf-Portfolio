<?php

namespace App\Http\Controllers;

use App\Models\Porto;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function main()
    {
        return view('main');
    }

    public function resume()
    {
        $Porto = Porto::all();

        return view('resume', compact(
            'Porto'
        ));
    }
}
