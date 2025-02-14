<?php

namespace App\Repositories;

use App\Models\CV;
use Illuminate\Support\Facades\Hash;

class CVRepository implements CVRepositoryInterface
{
    /**
     * Create a new class instance.
     */
    // public function __construct(public CV $model)
    // {
    //     //
    // }
   
    public function getAllCVs()
    {
        return CV::all();
    }

    public function getCVById($id)
    {
        return CV::findOrFail($id);
    }

    public function createCV(array $data)
    {
        return CV::create($data);
    }

    public function updateCV($id, array $data)
    {
        $cv = CV::findOrFail($id);
        $cv->update($data);
        return $cv;
    }

    public function deleteCV($id)
    {
        $cv = CV::findOrFail($id);
        return $cv->delete();
    }

}
