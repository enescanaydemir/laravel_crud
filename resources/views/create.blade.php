@extends('layout');
@section('content');

    <div class="container">
        <form action="{{route('book.store')}}" method="POST">
            @csrf
            <div class="mb-3">
            <label class="form-label">ÜRÜN ADI</label>
            <input type="text" class="form-control" name="name">
            </div>
            <button type="submit" class="btn btn-warning">KİTAP OLUŞTUR</button>
        </form>
    </div>


@endsection
