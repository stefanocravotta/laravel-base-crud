<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Comic;
use App\Http\Requests\ComicRequest;
use Illuminate\Support\Str;

class ComicController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $comics = Comic::orderBy('id', 'desc')->get();
        return view('comics.index', compact('comics'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('comics.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ComicRequest $request)
    {
        $data = $request->all();

        $new_comic = new Comic();
        $data['slug'] = $this->createSlug($data);
        $new_comic->fill($data);
        $new_comic->save();
        return redirect()->route('comics.show', $new_comic);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Comic $comic)
    {
        if($comic){
            return view('comics.show', compact('comic'));
        }

        abort (404, "Fumetto non presente nel database"); // perchè non funzia ;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Comic $comic)
    {

        if($comic){
            return view('comics.edit', compact('comic'));
        }

        abort ( 404 , "Fumetto non presente nel database"); // perchè non funzia ;

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(ComicRequest $request, Comic $comic)
    {
        $data = $request->all();

        $data['slug'] = $this->createSlug($data);
        $comic->update($data);

        return redirect()->route('comics.show', $comic);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Comic $comic)
    {
        $comic->delete();

        return redirect()->route('comics.index')->with('delete_comic', "Il fumetto $comic->title è stato eliminato correttamente");
    }

    private function createSlug($string){
        $slug = Str::slug($string['title'] ,'-');
        return $slug;
    }
}
