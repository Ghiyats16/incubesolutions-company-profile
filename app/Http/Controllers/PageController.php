<?php

namespace App\Http\Controllers;

use App\Models\Service;

class PageController extends Controller
{
    public function home()
    {
        return view('pages.home', [
            'services' => Service::all()
        ]);
    }

    public function about()
    {
        return view('pages.about');
    }

    public function services()
    {
        return view('pages.services', [
            'services' => Service::all()
        ]);
    }

    public function contact()
    {
        return view('pages.contact');
    }
}
