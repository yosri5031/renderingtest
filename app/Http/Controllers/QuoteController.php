<?php
namespace App\Http\Controllers;

use Illuminate\Support\Facades\Mail;
use Illuminate\Http\Request;

class QuoteController extends Controller
{
    public function submitQuoteRequest(Request $request)
    {
        $name = $request->input('name');
        $email = $request->input('email');
        $service = $request->input('service');
        $company = $request->input('company');
        $projectDetails = $request->input('project_details');

        $subject = 'Render4less request quote';
        $to = 'Bader@thebouraouigroup.com';
        $data = [
            'name' => $name,
            'email' => $email,
            'service' => $service,
            'company' => $company,
            'projectDetails' => $projectDetails,
        ];

        Mail::send('emails.quote_request', $data, function ($message) use ($to, $subject) {
            $message->to($to)->subject($subject);
        });

        // You can add any additional logic or redirection after sending the email

        return redirect()->back()->with('success', 'Quote request submitted successfully.');
    }
}