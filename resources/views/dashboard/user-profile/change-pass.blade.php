@section('title', 'Change Password')

@section('sidebar')
    @include('dashboard/subsection/sidebar/sidebar-landing-normal')
@endsection

@section('topbar')
    @include('dashboard/subsection/topbar/topbar-landing-normal')
@endsection

@extends('layouts.dashboard')
@section('content')
    <div class="row justify-content-center">
        <div class="col-lg-8">
            <div class="container-widgets">
                <div class="container-widgets__header"><h2>Change password</h2></div>

                <div class="container-widgets__body">
                    @if (session('error'))
                        <div class="alert alert-danger">
                            {{ session('error') }}
                        </div>
                    @endif
                    @if (session('success'))
                        <div class="alert alert-success">
                            {{ session('success') }}
                        </div>
                    @endif
                    <form class="form-horizontal" method="POST" action="/user-profile/change-password">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('current-password') ? ' has-error' : '' }}">
                            <label for="new-password" class="col-lg-4 control-label" style='color:#00629B'>Current Password</label>

                            <div class="col-lg-6">
                                <input id="current-password" type="password" class="form-control" name="current-password" required>

                                @if ($errors->has('current-password'))
                                    <span class="help-block text-danger">
                                    <strong>{{ $errors->first('current-password') }}</strong>
                                </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('new-password') ? ' has-error' : '' }}">
                            <label for="new-password" class="col-lg-4 control-label" style='color:#00629B'>New Password</label>

                            <div class="col-lg-6">
                                <input id="new-password" type="password" class="form-control" name="new-password" required>

                                @if ($errors->has('new-password'))
                                    <span class="help-block text-danger">
                                    <strong>{{ $errors->first('new-password') }}</strong>
                                </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="new-password-confirm" class="col-lg-4 control-label" style="color:#00629B">Confirm New Password</label>

                            <div class="col-lg-6">
                                <input id="new-password-confirm" type="password" class="form-control" name="new-password_confirmation" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-lg-6 col-lg-offset-4 mt-5">
                                <button type="submit" class="primary-button">
                                    Change Password
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-8 offset-lg-2">
            <div class="container-widgets">
                <div class="container-widgets__header">
                    <h2>Settings Navigation</h2>
                </div>
                <div class="container-widgets__body">
                    <div class="row">
                        <div class="col-4 widget-icon">
                            <a href='/dashboard'>
                                <img src="{{URL::asset('assets/images/Vendor Assets/dashboard.svg')}}">
                                <p>Dashboard Index</p>
                            </a>
                        </div>
                        <div class="col-4 widget-icon">
                            <a href='/user-profile'>
                                <img src="{{URL::asset('assets/images/Vendor Assets/user.svg')}}">
                                <p>User Profile</p>
                            </a>
                        </div>
                        <div class="col-4 widget-icon">
                            <a href='/user-profile/change-password'>
                                <img src="{{URL::asset('assets/images/Vendor Assets/password.svg')}}">
                                <p>Change Password</p>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>$('#ganti').addClass("active")</script>
@endsection