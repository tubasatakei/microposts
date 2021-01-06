<?php

namespace App\Http\Controllers;

class FavoriteController extends Controller
{
    public function store($id)
    {
        \Auth::user()->favorite($micropostId);
        return back();
    }

    public function destroy($id)
    {
        \Auth::user()->unfavorite($micropostId);
        return back();
    }
}
