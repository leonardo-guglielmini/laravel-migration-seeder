<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Train;

class PageController extends Controller
{
    public function index(Request $request)
    {
        $orderBy = $request->input('sort_by', 'departure_time');
        $direction = $request->input('direction', 'asc');

        $trains = Train::orderBy($orderBy, $direction)->get();

        return view('home', compact('trains', 'orderBy', 'direction'));
    }
}
