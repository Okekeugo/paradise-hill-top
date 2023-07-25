<?php

namespace App\Http\Controllers;

use App\Mail\ContactMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactMailController extends Controller
{
    public function index()
    {
        // dd(request()->all());
        $data = request()->all();
        Mail::to('paradisehilltopacademy@gmail.com')->send(new ContactMail($data));
    }
}
