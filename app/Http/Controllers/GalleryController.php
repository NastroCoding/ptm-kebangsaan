<?php

namespace App\Http\Controllers;

use App\Models\Gallery;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class GalleryController extends Controller
{
    public function store(Request $request) {
        // Validate the incoming request
        $request->validate([
            'title' => 'required',
            'images.*' => 'required|mimes:jpg,png,jpeg,gif,webp' // Validate each file in the images array
        ]);
    
        $user = $request->user();
    
        // Check if the request has files
        if ($request->hasFile('images')) {
            // Loop through each file with an index
            foreach ($request->file('images') as $index => $image) {
                // Create a unique image name using the title and index
                $imageName = $request->title . '_' . $index . '_' . time() . '.' . $image->getClientOriginalExtension();
                $path = $image->storeAs('public/images', $imageName);
    
                // Create a new gallery entry for each uploaded file
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
