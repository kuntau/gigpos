@extends('layouts.app')

@section('content')
<div class="container" style="margin-top: 25px">
    <div class="columns">
        <div class="column is-2">
          <aside class="menu">
            <ul class="menu-list">
              <p class="menu-label">Main</p>
              <li><a class="is-uppercase" href="{{ route('pos.index') }}"><i class="mdi mdi-monitor-dashboard"></i></a></li>
              <li><a class="is-active" href="{{ route('pos.cashier') }}"><i class="mdi mdi-store"></i></a></li>
              <li><a class="" href="#"><i class="mdi mdi-chart-bar"></i></a></li>
            </ul>
            <ul class="menu-list">
              <p class="menu-label">Items</p>
              <li><a class="disabled" href="#">Products</a></li>
              <li><a class="" href="#">Stocks</a></li>
              <li><a class="" href="#">Inventory</a></li>
            </ul>
          </aside>
        </div>
        <div class="column">
          <pos-cashier :products="{{ $products }}"></pos-cashier>
        </div>
    </div>
</div>
@endsection
