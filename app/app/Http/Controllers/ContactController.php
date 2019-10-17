<?php

namespace App\Http\Controllers;

use App\Http\Requests\PostContact;
use App\Mail\Contact;
use Illuminate\Support\Facades\Mail;
use Newsletter;

class ContactController extends Controller
{
    public function postContact(PostContact $request)
    {
        $input = $request->input();

        // send email
        Mail::to(config('mail.contact_email_to'))->send(new Contact($input));

        Newsletter::subscribe($input['email']);

        return response()->json(['status' => 'success']);
    }
}
