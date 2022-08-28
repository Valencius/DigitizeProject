<?php

namespace App\Repository;

interface IPesertaRepository{

    public function getAllPesertas();

    public function createPeserta(array $data);

    public function getSinglePeserta($id);

    public function editPeserta($id);

    public function updatePeserta($id, array $data);
}




?>