<?php

namespace App\Http\Controllers\Website;

use App\Http\Controllers\Controller;
use App\Models\Job;
use Illuminate\Http\Request;
use App\Models\JobApplication;

class JobApplicationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Validate the incoming request data
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'phone' => 'nullable|string|max:20',
            'resume' => 'required|file|mimes:pdf,doc,docx|max:2048',
            'message' => 'nullable|string',
        ]);

        // Handle file upload for resume
        if ($request->hasFile('resume')) {
            $resumePath = $request->file('resume')->store('resumes', 'public');
        }

        // Create a new job application record in the database
        JobApplication::create([
            'job_id' => $request->job_id,
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'resume' => $resumePath ?? null,
            'message' => $request->message,
            'ip' => $request->ip(),
        ]);

        // Redirect back with a success message
        return redirect()->back()->with('success', 'Your job application has been submitted successfully!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $jobApplication = Job::findOrFail($id);
        return view('website.jobs.apply', compact('jobApplication'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
