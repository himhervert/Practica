<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Announcement;
class announcementController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('announcements.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //validate the form data
        $this->validate($request, [
                'title' => 'required|max:200',
                'descripcion' => 'max:300'
            ]);
            $announcement = new Announcement();
            $announcement->titulo = $request->title;
            $announcement->descripcion = $request->descripcion;
        //process the data and submit it
        if($announcement->save()){
            return redirect()->route('announcements.show', $announcement->id);   
        }
        else{
            return redirect()->route('announcements.create');
        }
        //if successful we want to redirect
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //Use the mmodel to get one record from the DB
        $anuncio = Announcement::findOrFail($id);
        //Show the view and pass the record to the view
        return view('announcement.show')->with('announcement',$anuncio);
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
