@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            @foreach ($users as $user)
              <div class="card mb-4">
                <div class="card-header">{{ $user->name . ' | ' . $user->id }}</div>

                  <div class="card-body">
                      <ul class="list-unstyled">
                        <li>
                            E-mail: {{ $user->email }}
                        </li>
                        <li>Created at: {{ $user->created_at->diffForHumans() }}</li>
                        <li>Updated at: {{ $user->updated_at }}</li>
                      </ul>
                  </div>
              </div>
            @endforeach
        </div>
    </div>
    <div class="row">
      <div class="col-12 d-flex justify-content-center">
        {{ $users->links() }}
      </div>
    </div>
</div>
@endsection
