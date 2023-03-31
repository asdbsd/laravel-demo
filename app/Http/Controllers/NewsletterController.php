<?php

namespace App\Http\Controllers;

use App\Services\Newsletter;
use \Exception;
use Illuminate\Validation\ValidationException;

class NewsletterController extends Controller
{
    public function __invoke(Newsletter $newsletter)
    {
        request()->validate(['email' => 'required|email']);

        try {
            $newsletter->subscribe(request('email'));
        } catch (Exception $e) {
            throw ValidationException::withMessages([
                'email' => 'There is a problem adding provided e-mail. Please enter another e-mail '
            ]);
        }
    
        return redirect('/#newsletter')->with('success', request('email') . ' has been successfully subscribed!');
    }


}
