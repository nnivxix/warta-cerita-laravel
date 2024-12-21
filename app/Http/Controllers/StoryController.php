<?php

namespace App\Http\Controllers;

use App\Models\Story;
use Illuminate\Http\Request;
use App\Http\Resources\StoryResource;

class StoryController extends Controller
{

    public function index(Request $request)
    {
        $paginate = $request->query('paginate', 10);

        $stories = Story::with('user')
            ->latest()
            ->paginate($paginate);

        return StoryResource::collection($stories);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
