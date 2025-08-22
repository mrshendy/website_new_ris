<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\WelcomeMail; // هنستدعي الـ Mailable class

class EmailsController extends Controller
{
    public function welcomeEmail(Request $request)
    {
       
        $details = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email',
            'phone' => 'required|string|max:20',
            'subject' => 'required|string',
            'message' => 'required|string',
        ]);

        // 2. إرسال الإيميل
        try {
            Mail::to('Bassemabdelaziz7@gmail.com')->send(new WelcomeMail($details));

            // 3. إرجاع رسالة نجاح
            // return back()->with('success', 'Your message has been sent successfully!');
            return redirect()->route('index')->with('success', 'Your message has been sent successfully!');
            
        } catch (\Exception $e) {
            // في حالة حدوث خطأ
            return back()->with('error', 'Something went wrong, please try again.');
        }
    }
}