<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\News;
class newsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $showTable = news::get();
        return view('newsTable',compact('showTable'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('News');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
    $news = new News; //create object from car model
    $news->title= $request->title;
    $news->content= $request->content;
    if(isset($request->published)){
        $news->published=true;
    }else{
        $news->published=false;
    }
    $news->save();
    return "news data added successfully";
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $news = news::findOrFail($id);
        return view('editnews',compact('news'));
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
