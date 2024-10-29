<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Form;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;

class FormController extends Controller
{
    /**
     * Show the form for creating a new resource.
     * 
     * @return View
     */
    public function create(): View
    {
        $datas = new Form;
        $data['members'] = $datas->get_members()->get();

        return view('pages.join-us', compact('data')); 
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
            'email' => 'required|email',
            'name' => 'required|string',
            'phone' => 'required|string',
            'address' => 'required|string',
        ]);
    
        Form::create($validatedData);
    
        return response()->json(['success' => 'Thank you for joining with us!']);

    }

}
