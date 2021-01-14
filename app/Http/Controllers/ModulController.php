<?php

namespace App\Http\Controllers;

use App\Modul;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File; 
class ModulController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $file = $request->file('file');

        $file_name = time()."-".$file->getClientOriginalName();
        // $file_ext = $file->getClientOriginalExtension();

        $path = 'modul';

        $file->move($path, $file_name);

        Modul::create([

            'judul' => $request->judul,
            'desc' => $request->desc,
            'file' => $file_name

        ]);

        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Modul  $modul
     * @return \Illuminate\Http\Response
     */
    public function show(Modul $modul)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Modul  $modul
     * @return \Illuminate\Http\Response
     */
    public function edit(Modul $modul)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Modul  $modul
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {

        $data = Modul::find($id);
        $file = $request->file;
        
        if (!is_null($file)) {
            
            $file_name = time()."-".$file->getClientOriginalName();
            $path = 'modul';
            $file->move($path, $file_name);
            
            $data->update([
                'judul' => $request->judul,
                'desc' => $request->desc,
                'file' => $file_name          
            ]);

        }else{

            $data->update([
                'judul' => $request->judul,
                'desc' => $request->desc,
            ]);

        }

        return redirect()->back();

      
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Modul  $modul
     * @return \Illuminate\Http\Response
     */
    public function destroy(Modul $modul)
    {
        //
    }

    public function delete($id)
    {
        
        $data = Modul::find($id);
       
        if(\File::exists(public_path('modul/'.$data->file))){

            \File::delete(public_path('modul/'.$data->file));
        
          }else{
        
            dd('File does not exists.');
        
          }
        $data->delete();

        return redirect()->back();

    }
}
