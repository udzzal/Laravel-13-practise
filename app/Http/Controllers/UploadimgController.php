<?php

namespace App\Http\Controllers;

use App\Models\Image;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class UploadimgController extends Controller
{
    //

    public function upload(Request $req): ?RedirectResponse
    {

        $img = $req->file('file')->store('', 'public');
        $images = new Image;

        $images->img = $img;

        if ($images->save()) {
            return redirect('/imgshow');
        }

        return null;
    }

    public function imgshow(): View
    {
        $images = Image::all();

        return view('imgdata', ['imgdata' => $images]);
    }
}


