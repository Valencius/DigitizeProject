<?php

namespace App\Http\Controllers;

use App\Repository\IPesertaRepository;
use Illuminate\Http\Request;

class PesertaController extends Controller
{
    public $peserta;
    public function __construct(IPesertaRepository $peserta)
    {
        $this->peserta = $peserta;
    }

    public function index(){
        $pesertas = $this->peserta->getAllPesertas();

        return view('admin')->with('pesertas', $pesertas);
    }

    public function createPeserta(){

        return view('createPeserta');
    }

    public function store(Request $request){
        $request->validate([
            'picture' => 'required',
            'Nama' => 'required',
            'creator' => 'required',
            'desc' => 'required',
            'category' => 'required'
        ]);

        $data = $request->all();

        //picture upload

        if($image = $request->file('picture')) {
            $name = time() . "." . $image->getClientOriginalName();
            $image->move(public_path('files'), $name);
            $data['picture'] = "$name";
        }


        $this->peserta->createPeserta($data);

        return redirect('/admin');
    }

    public function show($id){
        $peserta = $this->peserta->getSinglePeserta($id);
        return view('pesertaShow')->with('peserta',$peserta);
    }

    public function edit($id){
        $peserta = $this->peserta->editPeserta($id);
        return view('pesertaEdit')->with('peserta',$peserta);
    }
    
    public function update(Request $request, $id){
        $request->validate([
            'picture' => 'required',
            'Nama' => 'required',
            'creator' => 'required',
            'desc' => 'required',
            'category' => 'required'
        ]);

        $data = $request->all();

        //picture upload

        if($image = $request->file('picture')) {
            $name = time() . "." . $image->getClientOriginalName();
            $image->move(public_path('files'), $name);
            $data['picture'] = "$name";
        }

    
        $this->peserta->updatePeserta($id, $data);

        return redirect('/admin');
    }

    public function delete($id){
        $this->peserta->deletePeserta($id);
        return redirect('/admin');
    }

}
