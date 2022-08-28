<?php

namespace App\Repository;
use App\Models\Peserta;

class PesertaRepository implements IPesertaRepository{

    public function getAllPesertas(){
        return Peserta::all();
    }

    public function createPeserta(array $data){
        
        $peserta = new Peserta();
        $peserta->picture = $data['picture'];
        $peserta->Nama = $data['Nama'];
        $peserta->creator = $data['creator'];
        $peserta->desc = $data['desc'];
        $peserta->category = $data['category'];


        $peserta->save();

        
    }

    public function getSinglePeserta($id){
        return Peserta::find($id);
    }

    public function editPeserta($id){
        return Peserta::find($id);
    }

    public function updatePeserta($id, array $data){
        Peserta::find($id)->update([
            'picture' => $data['picture'],
            'Nama' => $data['Nama'],
            'creator' => $data['creator'],
            'desc' => $data['desc'],
            'category' => $data['category']
        ]);
    }

    public function deletePeserta($id){
        return Peserta::find($id)->delete();
    }


}




?>