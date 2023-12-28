@extends('layout');
@section('content')

<div class="container">
    <form>
        <div class="mb-3">
            <label class="form-label">Kitap Adı</label>
            <input type="text" class="form-control" name="books_name" value="{{$book->books_name}}" readonly>
        </div>
        <div class="mb-3">
            <label class="form-label">Yazar</label>
            <input type="text" class="form-control" name="author" value="{{$book->author}}" readonly>
        </div>
        <div class="mb-3">
            <label class="form-label">Kitap Detayı</label>
            <input type="text" class="form-control" name="title" value="{{$book->title}}" readonly>
        </div>
    </form>
</div>

@endsection
