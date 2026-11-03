<?php

namespace App\Http\Controllers;

use App\Models\Character;
use Illuminate\Http\Request;

class CharactersController extends Controller
{
    public function index() {
        $characters = Character::with('descriptor', 'focus')->get();
        return response()->json($characters, 200);
    }
}
