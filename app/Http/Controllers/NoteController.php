<?php

namespace App\Http\Controllers;

use App\Models\Note;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class NoteController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('front.notes.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('front.notes.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //dd($request->all()) die and dump
        //dd($request->all());
        //dd($request->not_baslik);
        //dd(Auth::user()->id);

        //validation doğrulama
        //validate sağlanmazsa laravel errors gönderir return redirect()->route('notes_index')->with('errors','message');
        $request->validate(
            [
                //doğrulamak istediğim key => kurallarım
                //'title' => 'zorunlu minimum 3 karakter'
                'title' => 'required | min:13 | max:30 ',
                'content' => 'required',

            ],
            [//custom mesajlar    keyadi.kuraladi -> 'message'
                'title.required' => 'Başlık Yazmayı Unutmayın',
                'title.min' => 'Daha uzun Yaz!!',
                'content' => 'içerik kısmını boş bırakmayınız'
            ]
        );

        $note = new Note();
        $note -> user_id = Auth::user()->id;
        $note -> title = $request->title;
        $note -> content = $request->content;
        $note->save();



        //return redirect()->back();
        //başarılı durumda
        return redirect()->route('notes_index')->with('success','Başarıyla kaydedildi');//return json kullanılır


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
        //
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
