@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-1">
          <div class="list-group-flush mb-4">
            <a class="list-group-item list-group-item-action" href="{{ route('pos.index') }}"><i class="fa fa-tachometer fa-2x"></i></a>
            <a class="list-group-item list-group-item-action active" href="{{ route('pos.cashier') }}"><i class="fa fa-cash-register fa-2x"></i></a>
            <a class="list-group-item list-group-item-action" href="#"><i class="fa fa-file-chart-line fa-2x"></i></a>
          </div>
          <div class="list-group-flush mb-4">
            <a class="list-group-item list-group-item-action disabled" href="#">Products</a>
            <a class="list-group-item list-group-item-action" href="#">Stocks</a>
            <a class="list-group-item list-group-item-action" href="#">Inventory</a>
          </div>
          <div class="list-group-flush">
            <a class="list-group-item list-group-item-action disabled" href="#">Customers</a>
            <a class="list-group-item list-group-item-action" href="#">Stocks</a>
            <a class="list-group-item list-group-item-action" href="#">Inventory</a>
          </div>
        </div>
        <div class="col-md-11">
          <pos-cashier></pos-cashier>
        </div>
    </div>
</div>
@endsection
