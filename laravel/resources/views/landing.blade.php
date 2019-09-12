@extends('layouts.app')


@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card card-main">
                    <div class="card-header">Dashboard</div>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif

                        You are logged in, and at the landing page
                    </div>
                    <div class="card-container">
                        <a href="{{ URL::to('/modules') }}"><div class="card modules">
                                <p>Modules</p>
                            </div></a>

                        <a href="{{ URL::to('/events') }}"><div class="card events">
                                <p>Live Events and Courses</p>
                            </div></a>

                        <a href="{{ URL::to('/events') }}"><div class="card resources">
                                <p>Resources</p>
                            </div></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
