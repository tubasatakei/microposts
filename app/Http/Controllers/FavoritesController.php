<?php

namespace App\Http\Controllers;

class FavoritesController extends Controller
{
    public function store($micropostId)
    {
        \Auth::user()->favorite($micropostId);
        return back();
    }

    public function destroy($micropostId)
    {
        \Auth::user()->unfavorite($micropostId);
        return back();
    }
}
