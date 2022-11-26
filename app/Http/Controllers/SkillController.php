<?php

namespace App\Http\Controllers;

use App\Http\Resources\SkillResource;
use App\Models\Skill;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Storage;
use Inertia\Inertia;
use Inertia\Response;

class SkillController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $skills = SkillResource::collection(Skill::all());
        return Inertia::render('Skills/Index', compact('skills'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param Skill $skill
     * @return Response
     */
    public function edit(Skill $skill): Response
    {
        return Inertia::render('Skills/Edit', compact('skill'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param Request $request
     * @param int $id
     * @return RedirectResponse
     */
    public function update(Request $request, Skill $skill)
    {
        $image = $skill->image;
        $request->validate([
            'name' => ['required', 'min:3'],
            'image' => ['image'],
        ]);
        if (file_exists($image)) {
            Storage::delete($image);
            $image = $request->file('image')->store('skills', ['disk' => 'public']);
        }
        $skill->update([
            'name' => $request->name,
            'image' => $image
        ]);
        return Redirect::route('skills.index')->with('message', 'Skill updated successfully');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param Request $request
     * @return RedirectResponse
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => ['required', 'min:3'],
            'image' => ['required', 'image'],
        ]);
        if ($request->hasFile('image')) {
            $image = $request->file('image')->store('skills', ['disk' => 'public']);
            Skill::query()
                ->create([
                    'name' => $request->name,
                    'image' => $image,
                ]);
            return Redirect::route('skills.index')->with('message', 'Skills added successfully');
        }
        return Redirect::back();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        return Inertia::render('Skills/Create');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param Skill $skill
     * @return RedirectResponse
     */
    public function destroy(Skill $skill)
    {
        Storage::delete($skill->image);
        $skill->delete();
        return Redirect::back()->with('message', 'Skill deleted successfully');
    }
}
