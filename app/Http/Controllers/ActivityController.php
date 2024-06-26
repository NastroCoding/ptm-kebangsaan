<?php

namespace App\Http\Controllers;

use App\Models\Activity;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class ActivityController extends Controller
{
    public function store(Request $request) {
        $request->validate([
            'image' => 'required|mimes:jpg,png,webp,jpeg,gif',
            'title' => 'required',
            'description' => 'required',
            'date' => 'required',
        ]);

        $user = $request->user();
        $image = $request->image;

        if($request->hasFile('image')){
            $imageName = $request->title . '.' . $image->getClientOriginalExtension();
            $path = $image->storeAs('public/activities', $imageName);
        }

        $activity = Activity::create([
            'title' => $request->title,
            'images' => $path,
            'description' => $request->description,
            'date' => $request->date,
            'created_by' => $user->id
        ]);

        return redirect()->back()->with('success', 'Aktifitas berhasil dibuat!');
    }
}
