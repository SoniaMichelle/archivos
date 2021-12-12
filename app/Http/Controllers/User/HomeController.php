<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\File;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function home()
    {
        return view('user.home');
    }

    public function videos()
    {
        return view('user.carpetas.videos');
    }
    public function documentos()
    {
        $files = File::whereUserId(Auth::id())->latest()->get();
        return view('user.carpetas.documentos', compact('files'));
    }
    public function imagenes()
    {
        $files = File::whereUserId(Auth::id())->latest()->get();
        return view('user.carpetas.imagenes', compact('files'));
    }
}
