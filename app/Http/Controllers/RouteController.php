<?php

namespace App\Http\Controllers;

use App\Models\Activity;
use App\Models\Gallery;
use Illuminate\Http\Request;

class RouteController extends Controller
{
    public function gallery()
    {
        return view('views.gallery');
    }

    public function activity()
    {
        return view('views.activity');
    }

    public function contact()
    {
        return view('views.contact');
    }

    public function admin()
    {
        return view('admin.dashboard', [
            'page' => 'Dashboard'
        ]);
    }

    public function adminActivity()
    {
        $activity = Activity::latest()->get();
        return view('admin.activity', [
            'page' => 'Aktifitas',
            'activities' => $activity,
        ]);
    }

    public function adminGallery()
    {
        $gallery = Gallery::latest();
        return view('admin.gallery', [
            'page' => 'Galeri',
            'gallery' => $gallery
        ]);
    }

    public function adminInbox()
    {
        return view('admin.inbox', [
            'page' => 'Inbox'
        ]);
    }
}
