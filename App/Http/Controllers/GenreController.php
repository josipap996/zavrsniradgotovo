<?php

namespace App\Http\Controllers;

use App\Models\Genre;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class GenreController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $queryBuilder = DB::table('genres');

        if ($request->boolean('count')) {
            return json_encode(['count' => $queryBuilder->count()]);
        }

        $queryBuilder->select(['name as title']);

        if ($request->boolean('getId')) {
            $queryBuilder->addSelect(['id']);
        }

        if ($nameParameter = $request->input('name')) {
            $queryBuilder->where('name', 'LIKE', '%' . $nameParameter . '%');
        }

        $queryBuilder->oldest()->take(2)->skip(2);

        $queryBuilder->dd();

        return $queryBuilder->get();
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        DB::table('genres')->insert([
            'name' => $request->input('name')
        ]);

        return redirect()->route('genre.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(int $genre)
    {
        if (DB::table('genres')->where('id', '=', $genre)->doesntExist()) {
            abort(404);
        }

        return DB::table('genres')->find($genre);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, int $genre)
    {
        DB::table('genres')->where('id', $genre)->update(
            ['name' => $request->input('name')]
        );

        return redirect()->route('genre.show', ['genre' => $genre]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(int $genre)
    {
        DB::table('genres')->where('id', $genre)->delete();

        return redirect()->route('genre.index'); 
    }
}