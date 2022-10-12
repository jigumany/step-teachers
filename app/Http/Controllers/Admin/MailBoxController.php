<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class MailBoxController extends Controller
{
    public function index(){
        return view('admin.mailbox.index');
    }

    public function composeMail(){
        return view('admin.mailbox.compose');
    }

    public function mailDetails(){
        return view('admin.mailbox.details');
    }

    public function mailContact(){
        return view('admin.mailbox.contact');
    }

    public function mailContactDetails(){
        return view('admin.mailbox.contact_details');
    }

}
