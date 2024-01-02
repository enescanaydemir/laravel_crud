@extends('layout');
@section('content');



<form action="{{route('book.update', $book->id)}}" method="POST"> <!-- get ile alınan istekler create, post ile alınan istekler ise store fonksiyonuna gidecek -->
    @csrf <!--csrf form güvenliği için-->
    @method('PUT')
    <div class="mb-3">
        <label class="form-label">Kitap Adı</label>
        <input type="text" class="form-control" name="books_name" value="{{$book->books_name}}">
    </div>
    <div class="mb-3">
        <label class="form-label">Yazar</label>
        <input type="text" class="form-control" name="author" value="{{$book->author}}">
    </div>
    <div class="mb-3">
        <label class="form-label">Kitap Detayı</label>
        <input type="text" class="form-control" name="title">
    </div>
    <button type="submit" class="btn btn-warning">Güncelle</button>

</form>




@endsection
