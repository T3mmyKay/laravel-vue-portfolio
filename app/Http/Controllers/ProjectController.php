<?php

namespace App\Http\Controllers;

use App\Http\Resources\ProjectResource;
use App\Models\Project;
use App\Models\Skill;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Storage;
use Inertia\Inertia;
use Inertia\Response;

class ProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $projects = ProjectResource::collection(Project::with('skill')->get());
        return Inertia::render('Projects/Index', compact('projects'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param Project $project
     * @return Response
     */
    public function edit(Project $project): Response
    {
        $skills = Skill::all()->map(function ($skill) {
            return ['id' => $skill->id, 'name' => $skill->name];
        });
        return Inertia::render('Projects/Edit', compact('project', 'skills'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param Request $request
     * @param Project $project
     * @return RedirectResponse
     */
    public function update(Request $request, Project $project)
    {
        $image = $project->image;
        $request->validate(['name' => ['required', 'min:3'], 'skill_id' => ['required', 'exists:skills,id']]);

        if ($request->hasFile('image')) {
            Storage::delete($image);
            $image = $request->file('image')->store('projects', ['disk' => 'public']);
        }

        $project->update([
            'name' => $request->name,
            'image' => $image,
            'project_url' => $request->project_url,
            'skill_id' => $request->skill_id,
        ]);
        return Redirect::route('projects.index')->with('message', 'Project updated successfully');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(Request $request)
    {
        $request->validate([
            'skill_id' => ['required', 'exists:skills,id'],
            'name' => ['required', 'min:3'],
            'image' => ['required', 'image'],
        ]);

        if ($request->hasFile('image')) {
            $image = $request->file('image')->store('projects', ['disk' => 'public']);

            Project::query()
                ->create([
                    'skill_id' => $request->skill_id,
                    'name' => $request->name,
                    'image' => $image,
                    'project_url' => $request->project_url
                ]);

            return Redirect::route('projects.index')->with('message', 'Project created successfully');
        }
        return Redirect::back();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create(): Response
    {
        $skills = Skill::all()->map(function ($skill) {
            return ['id' => $skill->id, 'name' => $skill->name];
        });
        return Inertia::render('Projects/Create', compact('skills'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Project $project)
    {
        Storage::delete($project->image);
        $project->delete();
        return Redirect::back();
    }
}
