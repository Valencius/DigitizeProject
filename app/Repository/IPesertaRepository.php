<?php

namespace App\Repository;

interface IPesertaRepository{

    public function getAllPesertas();

    public function createPeserta(array $data);

    public function getSinglePeserta($id);

    public function editPeserta($id);

    public function updatePeserta($id, array $data);

    public function deletePeserta($id);

    public function voteDrawing($id, array $data);
    public function voteSinging($id, array $data);
    public function voteDancing($id, array $data);

}




?>