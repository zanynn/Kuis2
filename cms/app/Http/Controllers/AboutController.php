<?php

namespace App\Http\Controllers;

use App\About;
use Illuminate\Support\Facades\Cache;

class AboutController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function __invoke()
    {
        Cache::remember('about', 10, function () {
            return About::all();
        });
        $about = Cache::get('about');
        return view('About')->with(compact('about'));
    }
}
