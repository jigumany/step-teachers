<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CandidatesController extends Controller
{
    public function index(){
        return view('admin.candidates.index');
    }

    public function compliances(){
        return view('admin.candidates.compliances.index');
    }

    public function reports(){
        return view('admin.candidates.reports.index');
    }

    public function bookings(){
        return view('admin.candidates.bookings.index');
    }

    public function scheduledInterviews(){
        return view('admin.candidates.scheduledInterviews.index');
    }
}
