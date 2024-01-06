<?php

namespace App\Http\Controllers;

use App\Models\Archivo;
use App\Models\userFiles;
use Illuminate\Http\Request;

class ArchivoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(){
        // $archivos = Archivo::all();
        $userID = auth()->id();

        // $main = userFiles::all();
        $archivos = userFiles::join('archivos','user_file.file_id','=','archivos.id')->where('user_file.user_id',$userID)->get(['user_file.*','archivos.*']);
        
        return view('archivos.listArchivos',compact('archivos'));

        // $archivos = Archivo::find(1);
        // // return view('archivos.listArchivos',compact('archivos'));
        // return view('archivos.visor',compact('archivos'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id){
        //
    }

    public function createForm(){
        return view('file-upload');
    }

    public function fileUpload(Request $req){
        $req->validate([
            'file' => 'required|mimes:pdf'
        ]);
        $fileModel = new Archivo();
        if($req->file()) {
            $fileName = time().'_'.$req->file->getClientOriginalName();
            $filePath = $req->file('file')->storeAs('uploads', $fileName, 'public');
            $fileModel->nombre = time().'_'.$req->file->getClientOriginalName();
            $fileModel->file_path = '/storage/' . $filePath;
            $fileModel->save();
            return back()
                ->with('success','Se ha cargado el archivo.')
                ->with('file', $fileName);
        }
    }

    public function documentos(int $id){
        // dd(auth()->id());
        $userID = auth()->id();

        // $main = userFiles::all();
        $archivos = userFiles::join('archivos','user_file.file_id','=','archivos.id')->where('user_file.user_id',$userID)->get(['user_file.*','archivos.*']);
        // dd($main);

        // $user_id = auth()->id;
        // $branch = Branch::where('user_id', '=', $user_id)->first();
        // $faculties = Archivo::where('id', '=', $branch->name)->get();

        // $archivos = Archivo::find($id);
        // return view('archivos.listArchivos',compact('archivos'));
        return view('archivos.visor',compact('archivos'));
    }
}
