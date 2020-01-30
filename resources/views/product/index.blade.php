@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            @foreach ($products as $product)
              <div class="card mb-4">
                <div class="card-header">{{ $product->name . ' | ' . $product->id }}</div>

                  <div class="card-body">
                      <ul class="list-unstyled">
                        <li>
                            Desc: {{ $product->description }}
                        </li>
                        <li>Price: RM{{ $product->price }}</li>
                        <li>Code: {{ $product->barcode }}</li>
                      </ul>
                  </div>
              </div>
            @endforeach
        </div>
    </div>
    <div class="row">
      <div class="col-12 d-flex justify-content-center">
        {{ $products->links() }}
      </div>
    </div>
</div>
@endsection
