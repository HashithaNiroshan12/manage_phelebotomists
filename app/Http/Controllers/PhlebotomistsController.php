<?php

namespace App\Http\Controllers;

use App\Models\Addphlebotomist;
use Illuminate\Http\Request;

class PhlebotomistsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $phlebotomists = Addphlebotomist::all();

         return view('phlebotomists.managephlebotomist' ,
               [
                   'phlebotomists' => $phlebotomists
                ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('phlebotomists.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $phlebotomist = Addphlebotomist::create([
            'emp_id' => $request->input('emp_id'),
            'full_name' => $request->input('full_name'),
            'mobile' => $request->input('mobile'),
        ]);
       
        return redirect('/phlebotomists');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $phlebotomist = Addphlebotomist::find($id);
       
        return view('phlebotomists.edit')->with('phlebotomist', $phlebotomist);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $phlebotomist = Addphlebotomist::where('id', $id)->
               update([
                   //'emp_id' => $request->input('emp_id'),
                   'full_name' => $request->input('full_name'),
                   'mobile' => $request->input('mobile'),
                ]);

                return redirect('/phlebotomists');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Addphlebotomist $phlebotomist)
    {
        
        $phlebotomist->delete();
        return redirect('/phlebotomists');
    }
}
