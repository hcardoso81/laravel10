<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\ContactMailable;
use Illuminate\Cache\RedisLock;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Mail;
use Illuminate\View\View;

class ContactController extends Controller
{
    public function index(): View
    {
        return view('emails.contact.index');
    }

    public function store(Request $request): RedirectResponse
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'message' => 'required|min:10',

        ]);
        $mail = new ContactMailable($request->all());
        Mail::to('hernan.f.cardoso@gmail.com')->send($mail);
        return redirect()->route('contact.index')->with('info', 'Mensaje Enviado');
    }
}
