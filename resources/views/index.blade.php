@extends('layout')
@section('content')
<br>
    @can('create', App\Models\Book::class)
        <a href="{{route('library.create')}}" type='button' class="btn btn-success">Kitap Ekle</a>
    @endcan
        <table class="table">
            <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Kitap Adı</th>
                <th scope="col">Yazar</th>
                <th scope="col">Detay</th>
                <th scope="col">Güncelle</th>
                <th scope="col">Sil</th>
            </tr>
            </thead>
            <tbody>
                @if ($libraries)
                    @foreach ($libraries as $book)
                        <tr>
                            <th scope="row">{{$book->id}}</th>
                            <td>{{$book->books_name}}</td>
                            <td>{{$book->author}}</td>
                            <td>{{$book->title}}</td>
                            <td><a href="{{ route('library.show', $book->id) }}" type="button" class="btn btn-info">Detayları Göster</td>
                            <td>
                                @can('update', $book)
                                    <a href="{{ route('library.edit', $book->id) }}" type="button" class="btn btn-warning">Güncelle</td>
                                @endcan
                            <td>
                                @can('delete', $book)
                                    <form action="{{route('library.destroy', $book->id)}}" method="POST">
                                        @csrf
                                        @method("DELETE")
                                        <button type="submit" class="btn btn-danger">Kitap Sil</button>
                                    </form>
                                @endcan
                            </td>
                        </tr>
                    @endforeach
                @endif
            </tbody>
        </table>
@endsection
