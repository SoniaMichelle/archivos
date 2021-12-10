<?php

namespace App\Http\Controllers\Dash;

use App\Http\Controllers\Controller;
use App\Models\File;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;
use RealRashid\SweetAlert\Facades\Alert;


class FileController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('dash.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dash.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $max_sezi = (int)ini_get('upload_max_filesize') * 10240;
        $files = $request->file('files');
        $user_id = Auth::id();
        if ($request->hasFile('files')) {
            foreach ($files as $file) {
                $fileName = Str::slug($file->getClientOriginalName()) . '.' . $file->getClientOriginalExtension();
                if (Storage::putFileAs('/public/' . $user_id . '/', $file, $file->getClientOriginalName())) {
                    File::create([
                        'url' => $fileName, 
                        'user_id' => $user_id
                    ]);
                }
            }
            Alert::success('¡Exito!', 'Se ha subido el archivo');
            return back();
        } else {
            Alert::error('¡Error!', 'Seleccione uno o más archivos');
            return back();
        }
    }
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        $files = File::whereUserId(Auth::id())->latest()->get();
        return view('dash.show', compact('files'));
    }
    public function mostrar($id)
    {
        $files = File::whereId($id)->firstOrFail();
        $user_id = Auth::id();
        if ($files->user_id == $user_id) {
            return redirect('/storage' . '/' . $user_id . '/' . $files->url);
        } else {
            Alert::error('¡Error!', 'No tienes permiso para ver este archivo');
            return back();
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(File $files)
    {
        return view('dash.edit', compact('files'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, File $files)
    {
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, $id)
    {
        $files = File::whereId($id)->firstOrFail();
        unlink(public_path('storage' . '/' . Auth::id() . '/' . $files->url));
        $files->delete();
        alert()->warning('Atencion', 'Se ha eliminado el archivo');
        return redirect()->route('dash.show');
    }
    public function imagenes()
    {
        $db = new File();
        $files = $db::all();

        return view('user.carpetas.imagenes', compact('files'));
    }
}
