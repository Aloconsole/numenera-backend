<?php

namespace App\Http\Controllers;

use App\Models\Character;
use Illuminate\Http\Request;

class CharactersAdminController extends Controller
{
    public function index() {
        $characters = Character::with('descriptor', 'focus')->get();
        return view('characters', compact('characters'));
    }

    public function view(Character $character) {
        $character->load(['descriptor', 'focus']);
        return view('single-character', compact('character'));
    }
}
