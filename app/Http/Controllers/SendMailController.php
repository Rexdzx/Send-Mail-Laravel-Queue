<?php

namespace App\Http\Controllers;

use App\Jobs\SendEmailJob;
use Illuminate\Http\Request;

class SendMailController extends Controller
{
    public function index()
    {
        return view('send-email-queue');
    }

    public function store(Request $request)
    {
        $data = $request->all();
        // dd($data);
        dispatch(new SendEmailJob($data));
        return redirect()->route('send-mail')->with('status', 'Email Berhasil Dikirim')->with('data', $data);
    }
}
