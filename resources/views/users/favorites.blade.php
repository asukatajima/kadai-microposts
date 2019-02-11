@extends('layouts.app')

@section('content')
    <div class="row">
        <aside class="col-sm-4">
            @include('usres.card', ['user' => $user])
        </aside>
        <div class="col-sm-8">
           @include('usres.navtabs', ['user' => $user])
          @include('microposts.microposts', ['microposts' => $microposts])
        </div>
    </div>
@endsection