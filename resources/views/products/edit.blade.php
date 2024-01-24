@extends('layouts.default')
@section('content')
<div class="container">
    <h1>Ürün Ekle</h1>
    <form action="{{ route('products.store') }}" method="POST">
        @csrf
        @method('put')
        <div class="form-group">
            <label>Ürün Adı</label>
            <input type="text" class="form-control" name="name" required>
        </div>
        <div class="form-group">
            <label>Ürün Fiyatı</label>
            <input type="text" class="form-control" name="price" required>
        </div>
        <button type="submit" class="btn btn-primary">Ekle</button>
    </form>
</div>
@endsection