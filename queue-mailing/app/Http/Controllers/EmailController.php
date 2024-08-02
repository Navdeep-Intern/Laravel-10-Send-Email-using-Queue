<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Jobs\SendEmailJob;

class EmailController extends Controller
{
    /**
     * Dispatch the email sending job.
     *
     * @return \Illuminate\Http\Response
     */
    public function sendEmailJob()
    {
        // Define the email details
        $details = [
            'email' => 'recipient@example.com',
            'title' => 'Welcome to ItSolutionStuff.com',
            'message' => 'This is a test email sent using a queued job in Laravel.'
        ];

        // Dispatch the job
        SendEmailJob::dispatch($details);

        // Return a response
        return response()->json(['message' => 'Email job has been dispatched successfully.']);
    }
}
