@extends('layout')
@section('content')

<div class="container">
    <form>
        <div class="mb-3">
            <label class="form-label">ÜRÜN ADI</label>
            <input type="text" class="form-control" name="name" value="{{$books->name}}" readonly>
        </div>
    </form>
</div>
@endsection
