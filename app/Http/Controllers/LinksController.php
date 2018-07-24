<?php

namespace App\Http\Controllers;

use DummyFullModelClass;
use App\lain;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Input;
use Illuminate\Http\RedirectResponse;
use App\Link;

class LinksController extends Controller
{
    public function create() {
        return view('links.create');
    }
    public function index() {
        return view('links.create');
    }
    
    public function store() {
        $url = Input::get('url');
        $link = Link::firstOrCreate(['url' => $url]);
        // $link = Link::where('url', $url)->first();

        // if (!$link) {
        //     $link = Link::create(['url' => $url]);
        // }

        return view('links.success', compact('link'));
    }

    public function show($id) {
        $link = Link::findOrFail($id);
        return redirect($link->url, 301);
    }

}
