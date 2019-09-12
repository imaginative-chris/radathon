@extends('layouts.app')
@php
    $brand = App\Brand::whereHandle(config('app.brand'))->first();
@endphp
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

                    {{ __('airship.welcome', ['username' => Auth::user()->name]) }} {{ __('to') }} {{ $brand->name }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
