@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <a class="nav-link" href="{{ route('citizens.create') }}">Register Citizen</a>
                    <a class="nav-link" href="{{ route('citizens.index') }}">View Citizens</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
