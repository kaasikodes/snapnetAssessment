@extends('layouts.app')

@section('content')
<div class="container">
    <div class="card p-3 mb-4">
        <h2> States (click to see citizens in each state)</h2>
        @if(isset($states))
            @foreach($states as $state)
                <li><a href="/citizens/state/{{$state->id}}">{{$state->name}}</a></li>
            @endforeach
        @endif
    </div>
    <div class="card p-3 mb-4">
        <h2> LGAs (click to see citizens in each lga)</h2>
        @if(isset($lgas))
            @foreach($lgas as $lga)
                <li><a href="/citizens/lga/{{$lga->id}}">{{$lga->name}}</a></li>
            @endforeach
        @endif
    </div>
    <div class="card p-3 mb-4">
        <h2> Wards (click to see citizens in each ward)</h2>
        @if(isset($wards))
            @foreach($wards as $ward)
                <li><a href="/citizens/ward/{{$ward->id}}">{{$ward->name}}</a></li>
            @endforeach
        @endif
    </div>
</div>

@endsection
