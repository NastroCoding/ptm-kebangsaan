<?php

namespace App\Http\Controllers;

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
        return view('admin.activity', [
            'page' => 'Aktifitas'
        ]);
    }

    public function adminGallery()
    {
        return view('admin.gallery', [
            'page' => 'Galeri'
        ]);
    }

    public function adminInbox()
    {
        return view('admin.inbox', [
            'page' => 'Inbox'
        ]);
    }
}
