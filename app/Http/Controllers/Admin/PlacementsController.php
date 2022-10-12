<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PlacementsController extends Controller
{
    public function index(){
        return view('admin.placements.index');
    }
}
