@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Admin Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in as admin!') }}
                </div>

            </div>

             <div class="container">
                <h1>Feedback</h1>
                <a href="{{ route('set.show') }}" class="btn btn-primary">SHOW All FEEDBACK</a>
            </div>
        </div>
    </div>
</div>
@endsection