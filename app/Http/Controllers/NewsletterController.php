<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Newsletter;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;

class NewsletterController extends Controller
{
    /**
     * Show the form for creating a new resource.
     * 
     * @return View
     */
    public function create(): View
    {
        $emails = Newsletter::all(); // Get all emails if needed
        return view('pages.home', ['data' => ['email' => $emails]]); 
    }

    /**
     * Store a newly created resource in storage.
     * 
     * @param Request $request
     * @return RedirectResponse
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'email' => 'required|string'
        ]);
    
        Newsletter::create($validatedData);
    
        return response()->json(['success' => 'Thank you for subscribing to our newsletter!']);
    }
}
