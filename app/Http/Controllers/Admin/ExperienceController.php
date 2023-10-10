<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Interfaces\ExperienceInterface;
use Illuminate\Http\Request;

class ExperienceController extends Controller
{
    private $experience;

    public function __construct(ExperienceInterface $experience)
    {
        $this->experience = $experience;
    }

    public function index()
    {
        return view('admin.experience.index', [
            'experiences' => $this->experience->getAll()
        ]);
    }

    public function show($id)
    {
        return response()->json($this->experience->getById($id));
    }

    public function store(Request $request)
    {
        $request->validate([
            'company' => ['required'],
            'position'   => ['required'],
            'start_date'   => ['required'],
            'end_date'     => ['required'],
            'description'    => ['required'],
            'job_type'    => ['required']
        ]);

        try {
            $this->experience->store($request->all());
            return redirect()->route('admin.experience.index')->with('success', 'Experience has been added successfully');
        } catch (\Throwable $th) {
            return redirect()->route('admin.experience.index')->with('error', 'Experience failed to add');
        }
    }

    public function update($id, Request $request)
    {
        $request->validate([
            'company' => ['required'],
            'position'   => ['required'],
            'start_date'   => ['required'],
            'end_date'     => ['required'],
            'description'    => ['required'],
            'job_type'    => ['required']

        ]);

        try {
            $this->experience->update($id, $request->all());
            return redirect()->route('admin.experience.index')->with('success', 'Experience has been updated successfully');
        } catch (\Throwable $th) {
            return redirect()->route('admin.experience.index')->with('error', 'Experience failed to update');
        }
    }

    public function destroy($id)
    {
        try {
            $this->experience->destroy($id);
            return redirect()->route('admin.experience.index')->with('success', 'Experience has been deleted successfully');
        } catch (\Throwable $th) {
            return redirect()->route('admin.experience.index')->with('error', 'Experience failed to delete');
        }
    }
}
