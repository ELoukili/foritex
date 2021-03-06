<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\images;

class addimageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('Formulaireimage');  }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       $image = new images();
       /*

        $image->url = $request->input('image');
        $image->description = $request->input('desc');

        $image->save();

        return view('Formulaireimage')->with('success','image ajouter avec succes');*/
       // $request->image->store('logos');
        $file = $request->file('image');
        
        $destinationPath = 'uploads/logos';
        $file->move($destinationPath,$file->getClientOriginalName());
        $image->url = $destinationPath;
        $image->description = $request->input('desc');

        $image->save();

      return view('Formulaireimage')->with('success','image ajouter avec succes');
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
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
