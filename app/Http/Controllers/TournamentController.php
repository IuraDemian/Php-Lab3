<?php

namespace App\Http\Controllers;

use App\Models\Tournament;
use Illuminate\Http\Request;

class TournamentController extends Controller
{
    public function index()
    {
        $tournaments = Tournament::all();
        return view('tournaments.index', compact('tournaments'));
    }

    public function filter(Request $request)
    {
        $query = Tournament::query();

        if ($request->has('country') && !empty($request->country))
        {
            $query->where('country', 'like', '%' . $request->country . '%');
        }

        if ($request->has('min_age') && !empty($request->min_age))
        {
            $query->where('age', '>=', $request->min_age);
        }

        $tournaments = $query->get();

        return view('tournaments.index', compact('tournaments'));
    }

    public function create()
    {
        return view('tournaments.create');
    }

    public function store(Request $request)
    {
        $request->validate(
        [
            'full_name' => 'required|string|max:255',
            'gender' => 'required|string',
            'age' => 'required|integer|min:0',
            'country' => 'required|string|max:255',
            'score1' => 'required|integer|min:0',
            'score2' => 'required|integer|min:0',
            'score3' => 'required|integer|min:0',
        ]);

        $existingCodes = Tournament::pluck('code')->toArray();
        $code = 1;

        while (in_array($code, $existingCodes))
        {
            $code++;
        }

        Tournament::create(
        [
            'code' => $code,
            'full_name' => $request->input('full_name'),
            'gender' => $request->input('gender'),
            'age' => $request->input('age'),
            'country' => $request->input('country'),
            'score1' => $request->input('score1'),
            'score2' => $request->input('score2'),
            'score3' => $request->input('score3'),
        ]);

        return redirect()->route('tournaments.index')->with('success', 'Учасник успішно доданий!');
    }

    public function edit(Tournament $tournament)
    {
        return view('tournaments.edit', compact('tournament'));
    }

    public function update(Request $request, Tournament $tournament)
    {
        $request->validate(
        [
            'full_name' => 'required|string',
            'age' => 'required|integer|min:0',
            'country' => 'required|string',
            'score1' => 'required|integer|min:0',
            'score2' => 'required|integer|min:0',
            'score3' => 'required|integer|min:0',
        ]);

        $tournament->update(
        [
            'full_name' => $request->input('full_name'),
            'gender' => $request->input('gender'),
            'age' => $request->input('age'),
            'country' => $request->input('country'),
            'score1' => $request->input('score1'),
            'score2' => $request->input('score2'),
            'score3' => $request->input('score3'),
        ]);

        return redirect()->route('tournaments.index')->with('success', 'Учасник успішно оновлений!');
    }
}
