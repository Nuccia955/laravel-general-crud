<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Joke;

class JokeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $jokes = Joke::all();
        return view('jokes.index', compact('jokes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('jokes.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->all();
        
        $new_joke = new Joke();
        $new_joke->fill($data);
        $new_joke->save();

        return redirect()->route('jokes.show', $new_joke->id);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Joke $joke)
    {
        return view('jokes.show', compact('joke'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Joke $joke)
    {
        return view('jokes.edit', compact('joke'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Joke $joke)
    {
        $data = $request->all();
        $joke->update($data);

        return redirect()->route('jokes.show', $joke->id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Joke $joke)
    {
        $joke->delete();
        return redirect()->route('jokes.index');
    }
}
