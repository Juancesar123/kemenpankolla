<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\managementfilemodel;
use Illuminate\Http\UploadedFile;
class managementfile extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = managementfilemodel::paginate(2);
        return view('pages.managementfile',['data'=>$data]);
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
        $managementfileobject = new managementfilemodel();
        $managementfileobject->nama = $request->nama;
        $managementfileobject->path = 'images/'.$request->file('files')->getClientOriginalName();
        $managementfileobject->save();
        $destinationPath = 'images';
        $fileName = $request->file('files')->getClientOriginalName();
        $request->file('files')->move($destinationPath, $fileName);
        return redirect('/managementfile');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = managementfilemodel::where('_id',$id)->get();
        return view('pages.managementfileedit',['data'=>$data]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        managementfilemodel::where('_id',$id)->update([
            'nama' => $request->nama,
            'path' => 'images/'. $request->file('files')->getClientOriginalName()
        ]);
        
        $destinationPath = 'images';
        $fileName = $request->file('files')->getClientOriginalName();
        $request->file('files')->move($destinationPath, $fileName);
        return redirect('/managementfile');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        managementfilemodel::where('_id',$id)->delete();
        return redirect('/managementfile');
    }
}
