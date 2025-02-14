<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Repositories\CVRepositoryInterface;

class CVController extends Controller
{
    private $cvRepo;
    public function __construct(CVRepositoryInterface $cvRepo)
    {
        $this->cvRepo = $cvRepo;
    }
   
    public function index()
    {
        $cvs = $this->cvRepo->getAllCVs();
        return view('cv.index', compact('cvs'));
    }
    public function create()
    {
       
        return view('cv.create');
    }
    public function show($id)
    {
        $cv = $this->cvRepo->getCVById($id);
        return view('cv.show', compact('cv'));
    }

    public function store(Request $request)
    {
        $this->cvRepo->createCV($request->all());

        return redirect()->route('cv.index')->with('success', 'CV information saved successfully!');
    }

    public function edit($id)
    {
        $cv = $this->cvRepo->getCVById($id);
        return view('cv.edit', compact('cv'));
    }

    public function update(Request $request, $id)
    {
        $this->cvRepo->updateCV($id, $request->all());

        return redirect()->route('cv.index')->with('success', 'CV information updated successfully!');
    }

    public function destroy($id)
    {
        $this->cvRepo->deleteCV($id);
        return redirect()->route('cv.index')->with('success', 'CV deleted successfully!');
    }

}
