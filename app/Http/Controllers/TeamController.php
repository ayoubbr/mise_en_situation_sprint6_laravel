<?php

namespace App\Http\Controllers;

use App\Models\Team;
use Illuminate\Http\Request;

class TeamController extends Controller
{
    public function index()
    {
        $teams = Team::all();
        return view('teams.index', compact('teams'));
    }

    public function create()
    {
        return view('teams.create');
    }


    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required',
            'city' => 'required',
            'country' => 'required',
            'date_founded' => 'required'
        ]);

        Team::create([
            'name' => $validated['name'],
            'city' => $validated['city'],
            'country' => $validated['country'],
            'date_founded' => $validated['date_founded']
        ]);

        return redirect()->route('teams');
    }
    public function edit($teamId)
    {
        $team = Team::find($teamId);

        return view('teams.edit', compact('team'));
    }


    public function update(Request $request, $teamId)
    {
        $validated = $request->validate([
            'name' => 'required',
            'city' => 'required',
            'country' => 'required',
            'date_founded' => 'required'
        ]);

        $team = Team::find($teamId);

        $team->name = $validated['name'];
        $team->city = $validated['city'];
        $team->country = $validated['country'];
        $team->date_founded = $validated['date_founded'];

        $team->save();

        return redirect()->route('teams');
    }

    public function delete($teamId)
    {
        $team = Team::find($teamId);

        $team->delete();

        return redirect()->route('teams');
    }

    public function show($teamId)
    {
        $team = Team::find($teamId);

        return view('teams.show', compact('team'));
    }

    public function teamPlayers($teamId){
        $teamWithPlayers = Team::find($teamId)->with('players');
        dd($teamWithPlayers);
    }
}
