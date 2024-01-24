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
              </tr>
            </thead>
            <tbody>
              <tr>
                <th scope="row">1</th>
                <td>Mark</td>
                <td>Otto</td>
                <td>@mdo</td>
              </tr>
            </tbody>
          </table>
    </div>
@endsection