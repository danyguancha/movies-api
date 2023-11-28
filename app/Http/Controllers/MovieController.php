<?php

namespace App\Http\Controllers;

use App\Models\Movie;
use Illuminate\Http\Request;
use \Illuminate\Http\Response;
use App\Http\Requests\MovieRequestCreate;
use App\Http\Requests\MovieRequestUpdate;

class MovieController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return Movie::paginate();
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(MovieRequestCreate $request)
    {
        $movie = Movie::create($request->all());
        return response()->json(['movie' => $movie], Response::HTTP_CREATED);
    }

    /**
     * Display the specified resource.
     */
    public function show(Movie $movie)
    {
        $category = $movie->category;
        $response = [
            'movie' => $movie,
        ];
        return response()->json($response, Response::HTTP_OK);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(MovieRequestUpdate $request, Movie $movie)
    {
        $movie->update($request->all());
        return response()->json(['movie' => $movie], Response::HTTP_OK);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Movie $movie)
    {
        $movie->delete();
        return response()->json(['movie'=>$movie], Response::HTTP_ACCEPTED);

    }
}
