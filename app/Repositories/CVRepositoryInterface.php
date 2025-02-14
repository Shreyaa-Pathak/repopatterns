<?php
namespace App\Repositories;

use App\Models\CV;

interface CVRepositoryInterface
{
    public function getAllCVs();

    public function getCVById($id);

    public function createCV(array $data);

    public function updateCV($id, array $data);

    public function deleteCV($id);

}




