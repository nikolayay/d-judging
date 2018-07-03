<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Entry;

class JudgingController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function show(Entry $entry)
    {
        return view('judging.index', compact('entry'));
    }

}
