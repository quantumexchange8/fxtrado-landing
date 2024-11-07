<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\SubscriptionEmail;
use Illuminate\Support\Facades\Mail;

class SubscriptionController extends Controller
{
    public function submitEmail(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
        ]);

        // Get the email address from the request
        $email = $request->input('email');

        // Send the email to the developer
        Mail::send(new SubscriptionEmail($email));

        return redirect()->back()->with('message', 'Subscription request sent successfully!');
    }
}
