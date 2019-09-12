@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card card-main">
                    {{--<div class="card-header">{{ __('eLearning Modules') }}</div>--}}

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif

                        <div class="modules-container">
                            @foreach($courses as $course)
                                <div class="module"><p class="module-title">{{ $course->title }}</p></div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
