@extends('layouts.default')
@section('content')
<div class="container">
    <h1>Ürün Düzenle</h1>
    <form action="{{ route('products.update', $product->getKey()) }}" method="POST">
        @csrf
        @method('put')
        <div class="form-group">
            <label>Ürün Adı</label>
            <input type="text" class="form-control" value="{{ $product->getValue()['name'] }}" name="name" required>
        </div>
        <div class="form-group">
            <label>Ürün Fiyatı</label>
            <input type="text" class="form-control" value="{{ $product->getValue()['price'] }}" name="price" required>
        </div>
        <button type="submit" class="btn btn-primary">Düzenle</button>
    </form>
</div>
@endsection
