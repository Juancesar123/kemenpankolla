<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\biodata as biodatamodel;
class biodata extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = biodatamodel::paginate(2);
        return view('pages.biodata',['data'=>$data]);
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
        $this->validate($request, [
            'nama' => 'required',
            'alamat' => 'required',
            'email' => 'required|email',
            'notelpon' => 'required',
        ]);
        $biodataobject = new biodatamodel();
        $biodataobject->nama = $request->nama;
        $biodataobject->alamat = $request->alamat;
        $biodataobject->notelp = $request->notelpon;
        $biodataobject->email = $request->email;
        $biodataobject->save();
        return redirect('/');
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
        $data = biodatamodel::where('_id',$id)->get();
        return view('biodataedit',['data'=>$data]);
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
        biodatamodel::where('_id',$id)->update([
            'nama'=>$request->nama,
            'alamat'=>$request->alamat,
            'notelp' => $request->notelpon,
            'email' => $request->email 
        ]);
        return redirect('/');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        biodatamodel::where('_id',$id)->delete();
        return redirect('/');
    }
}
