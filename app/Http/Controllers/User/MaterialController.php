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
        $this->material         = $material;
        $this->materialCategory = $materialCategory;
    }

    public function index()
    {
        return view('user.material.index', [
            'materials'          => $this->material->getAll(),
            'materialCategories' => $this->materialCategory->getAll()
        ]);
    }

    public function download($id)
    {
        // Find the material by ID
        $material = Material::find($id);

        // Check if the material exists
        if (!$material) {
            return response()->json(['error' => 'Material not found'], 404);
        }

        // Increment the download count
        $material->download_count++;
        $material->save();

        $filePath = public_path('storage/materials/' . $material->file);

        // Check if the file exists
        if (file_exists($filePath)) {
            // Set the appropriate headers for the file download
            $headers = [
                'Content-Type' => 'application/octet-stream',
                'Content-Disposition' => 'attachment; filename="' . $material->file . '"',
            ];

            // Return the file for download
            return response()->download($filePath, $material->file, $headers);
        } else {
            // Handle the case where the file does not exist
            return response()->json(['error' => 'File not found'], 404);
        }
    }



    public function filter()
    {
        $materials = $this->material->filter();

        return view('user.material.item', [
            'materials' => $materials
        ])->render();
    }
}
