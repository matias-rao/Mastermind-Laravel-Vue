<?php

namespace App\Http\Controllers;

use App\Models\Resume;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class ResumeController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $resumes = auth()->user()->resumes;
        return view('resumes.index', compact('resumes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('resumes.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $user = auth()->user();

        $validator = $request->validate([
            'title' => 'required|string',
            'content' => 'required|json',
        ]);

        $resume = $user->resumes()->create([
            'name' => $user->name,
            'email' => $user->email,
            'title' => $request['title'],
            'content' => $request['content']
        ]);

        return redirect()->route('resumes.index');
    }

    /**
     * Display the specified resource.
     *
     * @param \App\Models\Resume $resume
     * @return \Illuminate\Http\Response
     */
    public function show(Resume $resume)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param \App\Models\Resume $resume
     * @return \Illuminate\Http\Response
     */
    public function edit(Resume $resume)
    {
        return view('resumes.edit', compact('resume'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\Resume $resume
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Resume $resume)
    {
//        dd($request);
        $resume->update($request->all());
        return redirect()->route('resumes.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\Models\Resume $resume
     * @return \Illuminate\Http\Response
     */
    public function destroy(Resume $resume)
    {
        //
    }
}
