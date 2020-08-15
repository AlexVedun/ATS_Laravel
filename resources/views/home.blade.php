@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('List of tests') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <ul class="list-group">
                        @foreach($tests as $test)
                            <a href="{{ route('test', ['alias' => $test->alias]) }}" class="list-group-item list-group-item-action">
                                {{ $test->name }}
                            </a>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
