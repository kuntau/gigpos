@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-2">
          <div class="list-group-flush mb-4">
            <a class="list-group-item list-group-item-action active" href="{{ route('pos.index') }}">Overview</a>
            <a class="list-group-item list-group-item-action" href="{{ route('pos.cashier') }}">Cashier</a>
            <a class="list-group-item list-group-item-action" href="#">Reports</a>
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
          <div class="col-md-10">
              <div class="card mb-4">
                <div class="card-header">Daily Sales</div>
                  <div class="card-body">
                    <p>Lorem ipsum dolor sit met, nam ea alienum dolores intellegam, ut qui quidam oblique maluisset. Nam eu inani argumentum, inani solita eos ut. Pro quidam definitionem an. Ut ius erigendi sapiente, nobis fabulas democritum eu qui. Vis porro vitae te, debet fabellas reformdans has ne.</p>
                  </div>
              </div>
              <div class="card mb-4">
                <div class="card-header">Daily Sales</div>
                  <div class="card-body">
                    <p>Lorem ipsum dolor sit met, nam ea alienum dolores intellegam, ut qui quidam oblique maluisset. Nam eu inani argumentum, inani solita eos ut. Pro quidam definitionem an. Ut ius erigendi sapiente, nobis fabulas democritum eu qui. Vis porro vitae te, debet fabellas reformdans has ne.</p>
                  </div>
              </div>
          </div>
    </div>
</div>
@endsection
