<?php

namespace App\Http\Controllers;

use App\Models\Books;
use Illuminate\Http\Request;

class BooksController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index() //index tüm ürünlerin çekileceği fonksiyon
    {
        $book = Books::all();
        return view('index', compact('book'));
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
        Books::create($request->all());
        return redirect('book');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $book = Books::FindOrFail($id);
        return view('show', compact('book'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $book=Books::FindOrFail($id); //Books tablosuna git ve bir tane kitap bul
        return view('update', compact('book'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $book=Books::FindOrFail($id);
        $book->update($request->all()); //gelen requestin tüm değerlerini update ediyoruz.
        return redirect('book');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $book=Books::FindOrFail($id);
        $book->delete();
        return redirect('book');
    }
}
