<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Interfaces\MaterialCategoryInterface;
use App\Interfaces\MaterialInterface;
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
        return view('admin.material.index', [
            'materials'          => $this->material->getAll(),
            'materialCategories' => $this->materialCategory->getAll(),
        ]);
    }

    public function show($id)
    {
        return response()->json($this->material->getById($id));
    }

    public function store(Request $request)
    {
        $request->validate([
            'material_category_id' => ['required'],
            'title'                => ['required'],
            'thumbnail'            => ['required', 'mimes:jpg,jpeg,png'],
            'file'                 => ['required', 'mimes:pdf'],
            'author'               => ['required'],
            'published_date'       => ['required'],
        ]);

        try {
            $this->material->store($request->all());
            return redirect()->back()->with('success', 'Material created successfully');
        } catch (\Throwable $th) {
            return redirect()->back()->with('error', $th->getMessage());
        }
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'material_category_id' => ['required'],
            'title'                => ['required'],
            'thumbnail'            => ['mimes:jpg,jpeg,png'],
            'file'                 => ['mimes:pdf'],
            'author'               => ['required'],
            'published_date'       => ['required'],
        ]);

        try {
            $this->material->update($id, $request->all());
            return redirect()->back()->with('success', 'Material updated successfully');
        } catch (\Throwable $th) {
            return redirect()->back()->with('error', $th->getMessage());
        }
    }

    public function destroy($id)
    {
        try {
            $this->material->destroy($id);
            return redirect()->back()->with('success', 'Material deleted successfully');
        } catch (\Throwable $th) {
            return redirect()->back()->with('error', $th->getMessage());
        }
    }
}
