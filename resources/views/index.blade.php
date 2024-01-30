@extends('layout')
@section('content')
<br>
    @can('create', App\Models\Book::class)
        <a href="{{route('book.create')}}" type='button' class="btn btn-success">Kitap Ekle</a>
    @endcan
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
                @foreach ($books as $book)
                    <tr>
                        <th scope="row">{{$book->id}}</th>
                        <td>{{$book->name}}</td>
                        <td><a href="" type="button" class="btn btn-info">GÖSTER</td>
                        <td><a href="" type="button" class="btn btn-warning">GÜNCELLE</td>
                        <td><a href="" type="button" class="btn btn-danger">SİL</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
@endsection
