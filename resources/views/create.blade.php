@extends('layout');
@section('content')
    <div class="container">
        <form action="{{route('book.store')}}" method="POST"> <!-- get ile alınan istekler create, post ile alınan istekler ise store fonksiyonuna gidecek -->
            @csrf <!--csrf form güvenliği için-->
            <div class="mb-3">
                <label class="form-label">Kitap Adı</label>
                <input type="text" class="form-control" name="books_name">
            </div>
            <div class="mb-3">
                <label class="form-label">Yazar</label>
                <input type="text" class="form-control" name="author">
            </div>
            {{-- <div class="mb-3">
                <label class="form-label">Kitap Detayı</label>
                <input type="text" class="form-control" name="title">
            </div> --}}
            <button type="submit" class="btn btn-warning">Ekle</button>

        </form>
    </div>


@endsection
