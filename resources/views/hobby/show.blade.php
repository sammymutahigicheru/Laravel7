@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-11">
                <div class="card">
                    <div class="card-header">{{ __('Hobby Detail') }}</div>

                    <div class="card-body">
                        <b>{{ $hobby->name }}</b>
                        <p>{{ $hobby->description }}</p>

                    </div>
                </div>
                <div class="mt-2">
                    <a class="btn btn-primary btn-sm" href="/hobby"><i class="fas fa-arrow-alt-circle-up">Back to overview</i></a>
                </div>
            </div>
        </div>
    </div>
@endsection
