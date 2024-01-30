@extends('layout');

@section('content')

<div class="container">
    <form action="{{route('book.update', $books->id)}}" method="POST">
        @csrf
        @method('PUT')
        <div class="mb-3">
        <label class="form-label">ÜRÜN ADI</label>
        <input type="text" class="form-control" name="name" value="{{$books->name}}">
        </div>
        <button type="submit" class="btn btn-warning">KİTAP GÜNCELLE</button>
    </form>
</div>


@endsection
