@extends('layouts.default')

@section('content')
    <div class="container">
        <div class="row">
            <h1>Ürünler <a href="{{ route('products.create') }}" class="btn btn-success">Ürün Ekle</a></h1>
        </div>

        <table class="table">
            <thead>
              <tr>
                <th scope="col">Ürün Adı</th>
                <th scope="col">Fiyatı</th>
                <th scope="col"></th>
              </tr>
            </thead>
            <tbody>
                @foreach ($products as $key => $product)
                <tr>
                    <td>{{ $product['name'] }}</td>
                    <td>{{ $product['price'] }}</td>
                    <td><a href="{{ route('products.edit', $key) }}" class="btn btn-info">Düzenle</a>
                        <form action="{{ route('products.destroy', $key) }}" method="POST">
                            @method('delete')
                            <button type="submit" class="btn btn-danger">Sil</button></td>
                        </form>
                </tr>
                @endforeach
            </tbody>
          </table>
    </div>
@endsection
