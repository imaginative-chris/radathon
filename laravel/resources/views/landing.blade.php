@extends('layouts.app')


@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Dashboard</div>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif

                        You are logged in, and at the landing page
                    </div>

                    <a href="{{ URL::to('/modules') }}"><div class="button">
                        Modules
                        </div></a>

                    <a href="{{ URL::to('/events') }}"><div class="button">
                        Events
                        </div></a>
                </div>
            </div>
        </div>
    </div>
@endsection
