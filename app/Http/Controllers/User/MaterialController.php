<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Interfaces\MaterialInterface;
use App\Interfaces\MaterialCategoryInterface;
use App\Models\Material;
use Illuminate\Http\Request;


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
            'materialCategories' => $this->materialCategory->getAll()
        ]);
    }

    // public function download($id) {
    //     $material = Material::find($id);
    
    //     if ($material) {
    //         $material->increment('download_count');
    //         return true;
    //     } else {
    //         return response()->json(['error' => 'Material not found'], 404);
    //     }
    // }
    

    public function filter()
    {
        $materials = $this->material->filter();
    
        return view('user.material.item', [
            'materials' => $materials
        ])->render();
        
    }
    
}
