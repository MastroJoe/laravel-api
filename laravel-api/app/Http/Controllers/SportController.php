<?php

namespace App\Http\Controllers;

use App\Sport;
use Illuminate\Http\Request;

class SportController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $sports = Sport::all();

      return response()->json([
        'data' => $sports,
        'success' => true,
      ]);
    }
}
