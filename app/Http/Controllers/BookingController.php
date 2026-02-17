<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\BookingRequest;

class BookingController extends Controller
{
    // Return a simple captcha (two numbers) and save expected sum in session
    public function captcha(Request $request)
    {
        $a = rand(2, 9);
        $b = rand(1, 9);
        $request->session()->put('booking_captcha', $a + $b);
        return response()->json(['a' => $a, 'b' => $b]);
    }

    // Handle booking form submission
    public function submit(Request $request)
    {
        $data = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'phone' => 'required|string|max:40',
            'whatsapp' => 'sometimes|boolean',
            'preferred_time' => 'nullable|string|max:255',
            'captcha_answer' => 'required|numeric',
        ]);

        $expected = $request->session()->get('booking_captcha');
        if ((int)$data['captcha_answer'] !== (int)$expected) {
            return response()->json(['message' => 'Captcha answer is incorrect.'], 422);
        }

        // Send an email to site admin / notifications
        try {
            $to = config('mail.from.address') ?? env('MAIL_FROM_ADDRESS');
            // Use a dedicated env override if present
            if (env('BOOKING_TO')) {
                $to = env('BOOKING_TO');
            }
            Mail::to($to)->send(new BookingRequest($data));
        } catch (\Throwable $e) {
            // swallow with error response
            return response()->json(['message' => 'Failed to send booking.'], 500);
        }

        // Optionally clear captcha
        $request->session()->forget('booking_captcha');

        return response()->json(['message' => 'Booking request submitted.']);
    }
}

