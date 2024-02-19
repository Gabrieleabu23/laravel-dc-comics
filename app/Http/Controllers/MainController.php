<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Comic;
class MainController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $titolo = Comic::all();
        return view("pages.index", compact("titolo"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("pages.create");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request -> all();
        $request -> validate([
            'titolo'=>'required|string|min:3|max:255',
            'anno_pubblicazione'=>'required|numeric|min:1920|max:2024',
            'numero_volume'=>'required|numeric|min:0|max:500',
            'descrizione'=>'required|string|min:1|max:200',
        ],[
            'titolo'=> 'DEVE essere tra 3 e 255 caratteri',
            'anno_pubblicazione'=> 'DEVE essere tra 1920 e 2024',
            'numero_volume'=> 'DEVE essere tra 0 e 500',
            'descrizione'=> 'DEVE essere almeno una frase e massimo 4'
        ]);
        $Fumetto = new Comic();

        $Fumetto -> titolo =$data['titolo'];
        $Fumetto -> numero_volume=$data['numero_volume'];
        $Fumetto -> anno_pubblicazione=$data['anno_pubblicazione'];
        $Fumetto ->  descrizione=$data['descrizione'];

        $Fumetto -> save();

        return redirect() -> route('users.show', $Fumetto -> id);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $Fumetto = Comic :: find($id);

        return view('pages.show', compact('Fumetto'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $Fumetto = Comic :: find($id);
        return view('pages.edit', compact('Fumetto'));
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
        $Fumetto= Comic ::find($id);
        $data= $request -> all();
        $request -> validate([
            'titolo'=>'required|string|min:3|max:255',
            'anno_pubblicazione'=>'required|numeric|min:1920|max:2024',
            'numero_volume'=>'required|numeric|min:0|max:500',
            'descrizione'=>'required|string|min:1|max:200',
        ],[
            'titolo'=> 'DEVE essere tra 3 e 255 caratteri',
            'anno_pubblicazione'=> 'DEVE essere tra 1920 e 2024',
            'numero_volume'=> 'DEVE essere tra 0 e 500',
            'descrizione'=> 'DEVE essere almeno una frase e massimo 4'
        ]);
        $Fumetto -> titolo =$data['titolo'];
        $Fumetto -> numero_volume=$data['numero_volume'];
        $Fumetto -> anno_pubblicazione=$data['anno_pubblicazione'];
        $Fumetto ->  descrizione=$data['descrizione'];

        $Fumetto -> save();

        return redirect() -> route('users.show', $Fumetto -> id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $Fumetto = Comic :: find($id);
        $Fumetto -> delete();
        return redirect() -> route('users.index');
    }
}
