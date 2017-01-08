<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StoryController extends Controller
{
    public function index()
    {

        if (empty($warriors)) {
            return view('story/createCharacter');
        } else {
            return view('story/storyHome');
        }

    }
}