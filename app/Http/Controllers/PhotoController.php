<?php

namespace App\Http\Controllers;

use App\Gestion\PhotoGestionInterface;
use App\Http\Requests\ImageRequest;

class PhotoController extends Controller
{
    public function getForm()
    {
        return view('photo');
    }

    public function postForm(ImageRequest $request, PhotoGestionInterface $photoGestion)
    {
        if ($photoGestion->save($request->file('image'))) {
            return view('photo_ok');
        }

        return redirect('photo')
            ->with('error', 'Désolé mais votre image ne peut pas être envoyée ! ');
    }
}
