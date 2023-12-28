<?php

namespace App\Http\Controllers;

use App\Models\Library;
use Illuminate\Http\Request;

class LibraryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index() //index tüm ürünlerin çekileceği fonksiyon
    {
        $libraries = Library::all();
        return view('index', compact('libraries'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Library::create($request->all());
        return redirect('library');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $book = Library::FindOrFail($id);
        return view('show', compact('book'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $book=Library::FindOrFail($id); //library tablosuna git ve bir tane kitap bul
        return view('update', compact('book'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $book=Library::FindOrFail($id);
        $book->update($request->all()); //gelen requestin tüm değerlerini update ediyoruz.
        return redirect('library');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $book=Library::FindOrFail($id);
        $book->delete();
        return redirect('library');
    }
}
