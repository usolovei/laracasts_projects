<?php

namespace App\Http\Controllers;

use App\Http\Resources\ProjectResource;
use App\Project;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\AnonymousResourceCollection;
use Illuminate\Http\Resources\Json\JsonResource;
use PHPUnit\Util\Json;
use Symfony\Component\Translation\Exception\NotFoundResourceException;

class ProjectsApiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return AnonymousResourceCollection
     */
    public function index()
    {
        return ProjectResource::collection(Project::paginate(25));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return ProjectResource
     */
    public function store(Request $request)
    {
        $project = Project::create([
            'title' => $request->title,
            'description' => $request->description,
        ]);

        return new ProjectResource($project);
    }

    /**
     * Display the specified resource.
     *
     * @param  Project $project
     * @return ProjectResource
     */
    public function show(Project $project)
    {
        return new ProjectResource($project);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  Project $project
     * @return ProjectResource
     */
    public function update(Request $request, Project $project)
    {
        $project->update($request->only(['title', 'description']));
        return new ProjectResource($project);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  Project $project
     * @return ProjectResource
     *
     * @throws
     */
    public function destroy(Project $project)
    {
        $project->delete();
        return response()->json(null, 204);
    }
}
