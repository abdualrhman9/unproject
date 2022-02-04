<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Disease;
use App\Models\Section;
use Illuminate\Http\Request;

class DiseaseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $diseases = Disease::latest()->simplePaginate(15);
        return view('admin.diseases.index',compact('diseases'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $disease = new Disease();
        $sections = Section::latest()->get();
        return view('admin.diseases.create',compact('disease','sections'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            'name'=>'required|string|min:5|max:255',
            'section_id'=>'required|exists:App\Models\Section,id',
        ]);

         $Disease =  Disease::create($data);

         return redirect()->back()->with('message','Success Operation');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Disease  $disease
     * @return \Illuminate\Http\Response
     */
    public function show(Disease $disease)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Disease  $disease
     * @return \Illuminate\Http\Response
     */
    public function edit(Disease $disease)
    {
        $sections = Section::latest()->get();
        return view('admin.diseases.edit',compact('disease','sections'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Disease  $disease
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Disease $disease)
    {
        $data = $request->validate([
            'name'=>'required|string|min:5|max:255',
            'section_id'=>'required|exists:App\Models\Section,id',
        ]);

        $disease->update($data);

        return redirect()->back()->with('message','Success Updating Data ..');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Disease  $disease
     * @return \Illuminate\Http\Response
     */
    public function destroy(Disease $disease)
    {
        //
    }
}
