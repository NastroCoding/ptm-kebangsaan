<?php

namespace App\Http\Controllers;

use App\Models\Gallery;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class GalleryController extends Controller
{
    public function store(Request $request){
        $request->validate([
            'title' => 'required',
            'image' => 'required|mimes:jpg,png,jpeg,gif,webp'
        ]);

        $image = $request->image;
        $user = $request->user();

        if($request->hasFile('image')){
            $imageName = $request->title . '.' . $image->getClientOriginalExtension();
            $path = $image->storeAs('public/images', $imageName);
        }

        $gallery = Gallery::create([
            'title' => $request->title,
            'image' => $path,
            'created_by' => $user->id
        ]);

        return redirect()->back()->with('success', 'Foto berhasil di Upload!');
    }
}
