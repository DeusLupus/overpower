<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StoryController extends Controller
{
    //
    public function index(){
        return view('/story/storyHome');
    }
}