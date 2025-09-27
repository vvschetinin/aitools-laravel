<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ServicesIndexController extends Controller
{
  public function index()
  {
    return view('pages.services.index');
  }
}