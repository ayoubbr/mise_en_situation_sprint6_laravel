<?php

namespace App\Http\Controllers;

use App\Models\Player;
use Illuminate\Http\Request;

class PlayerController extends Controller
{
    public function index()
    {
        $players = Player::all();
        return view('players.index', compact('players'));
    }

    public function create()
    {
        return view('players.create');
    }


    public function store(Request $request)
    {
        $validated = $request->validate([
            'fname' => 'required',
            'lname' => 'required',
            'age' => 'required',
            'height' => 'required',
            'foot' => 'required',
            'team_id' => 'required'
        ]);

        Player::create([
            'fname' => $validated['fname'],
            'lname' => $validated['lname'],
            'age' => $validated['age'],
            'height' => $validated['height'],
            'foot' => $validated['foot'],
            'team_id' => $validated['team_id'],
        ]);

        return redirect()->route('players');
    }
    public function edit($playerId)
    {
        $player = Player::find($playerId);

        return view('players.edit', compact('player'));
    }


    public function update(Request $request, $playerId)
    {
        $validated = $request->validate([
            'fname' => 'required',
            'lname' => 'required',
            'age' => 'required|numeric',
            'height' => 'required',
            'foot' => 'required',
            'team_id' => 'required'

        ]);

        $player = Player::find($playerId);

        $player->fname = $validated['fname'];
        $player->lname = $validated['lname'];
        $player->age = $validated['age'];
        $player->height = $validated['height'];
        $player->foot = $validated['foot'];
        $player->team_id = $validated['team_id'];

        $player->save();

        return redirect()->route('players');
    }

    public function delete($playerId)
    {
        $player = Player::find($playerId);

        $player->delete();

        return redirect()->route('players');
    }

    public function show($playerId)
    {
        $player = Player::find($playerId);

        return view('players.show', compact('player'));
    }
}
