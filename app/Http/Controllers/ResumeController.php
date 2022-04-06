<?php

namespace App\Http\Controllers;

use App\Models\Resume;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;


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
//        $resume = auth()->user()->resume;
//        dd($resume);
        return view('resumes.index');
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

        $resume = $user->resumes()->where('title', $request->title)->first();
        if ($resume) {
            return back()
                ->withErrors(['title' => 'Ya tenes un CV con ese titulo'])
                ->withInput(['title' => $request->title]);
        }

        $resume = $user->resumes()->create([
            'title' => $request['title'],
            'name' => $user->name,
            'email' => $user->email,
//            'website' => $request['title'],
//            'picture' => $request['title'],
//            'about' => $request['title']
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
        $data = $request->validate([
            'name' => ['required', 'string'],
            'email' => ['required', 'email'],
            'website' => ['nullable', 'url'],
            'picture' => ['nullable', 'image'],
            'about' => ['nullable', 'string'],
            'title' => Rule::unique('resume')->where(function ($query) use ($resume) {
                return $query->where('user_id', $resume->user->id);
            })->ignore($resume->id)
        ]);

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
