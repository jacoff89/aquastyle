<?php

namespace App\Http\Controllers;

use App\Mail\ContactMail;
use Illuminate\Support\Facades\Mail;
use App\Http\Requests\ContactRequest;

class ContactController extends Controller
{
    public function send(ContactRequest $request)
    {
        $data = $request->validated();

        Mail::to('jacoff8920@mail.ru')->send(new ContactMail($data));

        return response()->json('MF000');
    }
}
