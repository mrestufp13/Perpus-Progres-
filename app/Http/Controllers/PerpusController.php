<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Buku;
use Input;
use App\Http\Requests\createBuku;

class PerpusController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        $buku = Buku::paginate(5);   
        $data['buku'] = $buku->setPath('perpus');
        return view('perpus.index',$data);
        
    }
    
    public function search(Request $request)
    {
        
        $keyword = $request['keyword'];
        $buku = Buku::where('rak','=',$keyword)->paginate(5);
        $data['buku'] = $buku->setPath('perpus');
        return view('perpus.index',$data);
        
    }
    
    

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
       return view('perpus.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(createBuku $request)
    {        
        $filename = Input::file('foto')->getClientOriginalName();
        $size     = Input::file('foto')->getSize();
        Input::file('foto')->move(public_path().'/foto/',$filename);

        $data = $request->all();
        $data = array(
        
        'id_buku'=>Input::get('id_buku'),
        'judul'=>Input::get('judul'),
        'penerbit'=>Input::get('penerbit'),
        'pengarang'=>Input::get('pengarang'),
        'rak'=>Input::get('rak'),
        'foto'=>$filename);
        
        Buku::create($data);
        return redirect('perpus');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data['buku'] = Buku::find($id);
        return view('perpus.show',$data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data['buku'] = Buku::find($id);
        return view('perpus.edit',$data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(createBuku $request, $id)
    {

        $data = $request->all();
        $buku = Buku::find($id);
        $buku->update($data);
        return redirect('perpus');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $buku = Buku::find($id);
        $buku->delete();
        return redirect('perpus');
    }
}
