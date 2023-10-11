<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Interfaces\MaterialInterface;
use App\Interfaces\MaterialCategoryInterface;
use App\Models\Material;

class MaterialController extends Controller
{
    private $material;
    private $materialCategory;
    
    public function __construct(MaterialInterface $material, MaterialCategoryInterface $materialCategory)
    {
        $this->material = $material;
        $this->materialCategory = $materialCategory;
    }

    public function index(){
        return view('user.material.index', [
            'materials' => $this->material->getAll(),
            'materialCategories' =>$this->materialCategory->getAll()
        ]);
    }

    public function download($id) {
        Material::find($id)->increment('download_count');
        return true;
    }
}
