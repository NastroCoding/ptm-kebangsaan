<?php

namespace App\Http\Controllers;

use App\Models\Gallery;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class GalleryController extends Controller
{
    public function store(Request $request) {
        $request->validate([
            'title' => 'required',
            'images.*' => 'required|mimes:jpg,png,jpeg,gif,webp' // Validate each file in the images array
        ]);
    
        $user = $request->user();
    
        if($request->hasFile('images')) {
            foreach ($request->file('images') as $image) {
                $imageName = $request->title . '_' . time() . '.' . $image->getClientOriginalExtension();
                $path = $image->storeAs('public/images', $imageName);
    
                Gallery::create([
                    'title' => $request->title,
                    'image' => $path,
                    'created_by' => $user->id
                ]);
            }
        }
    
        return redirect()->back()->with('success', 'Foto berhasil di Upload!');
    }
}
