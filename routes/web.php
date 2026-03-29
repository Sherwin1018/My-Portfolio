<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::post('/contact', function (Request $request) {
    $validated = $request->validate([
        'full_name' => ['required', 'string', 'max:120'],
        'email' => ['required', 'email', 'max:120'],
        'phone_number' => ['required', 'string', 'max:30'],
        'subject' => ['required', 'string', 'max:150'],
        'message' => ['required', 'string', 'max:2000'],
    ]);

    $content = "New contact form message\n\n"
        ."Name: {$validated['full_name']}\n"
        ."Email: {$validated['email']}\n"
        ."Phone: {$validated['phone_number']}\n"
        ."Subject: {$validated['subject']}\n\n"
        ."Message:\n{$validated['message']}\n";

    try {
        Mail::raw($content, function ($mail) use ($validated) {
            $mail->to('espanosherwin10@gmail.com')
                ->subject('[Portfolio Contact] '.$validated['subject'])
                ->replyTo($validated['email'], $validated['full_name']);
        });
    } catch (\Throwable $e) {
        report($e);
        return redirect('/#contact')
            ->withInput()
            ->with('contact_error', 'Message could not be sent right now. Please try again.');
    }

    return redirect('/#contact')->with('contact_success', 'Message sent successfully. Thank you!');
})->name('contact.send');
