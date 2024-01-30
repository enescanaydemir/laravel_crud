@extends('layout')
@section('content')
<br>
<a href="{{route('book.create')}}" type="button" class="btn btn-success">KİTAP EKLE</a>
        <table class="table">
            <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Kitap Adı</th>
                <th scope="col">Göster</th>
                <th scope="col">Güncelle</th>
                <th scope="col">Sil</th>
            </tr>
            </thead>
            <tbody>
                @if ($books)
                    @foreach ($books as $book)
                        <tr>
                            <th scope="row">{{$book->id}}</th>
                            <td>{{$book->name}}</td>
                            <td><a href="{{route('book.show', $book->id)}}" type="button" class="btn btn-info">GÖSTER</td>
                            <td><a href="{{route('book.edit', $book->id)}}" type="button" class="btn btn-warning">GÜNCELLE</td>
                            <td>
                                <form action="{{route('book.destroy', $book->id)}}" method="POST">
                                @csrf
                                @method('DELETE')
                                    <button type="submit" class="btn btn-danger">ÜRÜN SİL</button>
                                </form>
                            </td>
                            </tr>
                    @endforeach
                @endif
            </tbody>
        </table>
@endsection
