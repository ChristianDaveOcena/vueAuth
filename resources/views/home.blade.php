@extends('layouts.app')
        <div class="sidebar-container">
            <div class="sidebar-logo">
                Dashboard
            </div>
            <ul class="sidebar-navigation">
                <li class="header">Navigation</li>
                <li>
                    <a href="{{ url('/home') }}">
                        <i class="fa fa-home" aria-hidden="true"></i> Homepage
                    </a>
                </li>
                <li>
                    <a href="{{ url('/products') }}">
                        <i class="fa fa-tachometer" aria-hidden="true"></i> Products
                    </a>
                </li>
                <li class="header">Another Menu</li>
                <li>
                    <a href="#">
                        <i class="fa fa-users" aria-hidden="true"></i> Friends
                    </a>
                </li>
                <li>
                    <a href="#">
                        <i class="fa fa-cog" aria-hidden="true"></i> Settings
                    </a>
                </li>
                <li>
                    <a href="#">
                        <i class="fa fa-info-circle" aria-hidden="true"></i> Information
                    </a>
                </li>
            </ul>
        </div>
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

                    {{ __('You are logged in!') }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
