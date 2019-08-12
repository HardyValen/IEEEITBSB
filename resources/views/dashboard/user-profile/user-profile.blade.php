@section('title', 'User Profile')

@section('sidebar')
    @include('dashboard/subsection/sidebar/sidebar-landing-normal')
@endsection

@section('topbar')
    @include('dashboard/subsection/topbar/topbar-landing-normal')
@endsection

@extends('layouts.dashboard')
@section('content')

    <div class="row">
        <div class="col-lg-8 offset-lg-2">

            @if(session()->has('message'))
            <div class="row">
                <div class="col-lg-12">
                    <div class='alert alert-dismissible fade show alert-info'>
                        <i class='fas fa-info-circle'></i>&ensp;&ensp;{{ session()->get('message') }}
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                </div>
            </div>
            @endif

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

    <div class="teaminfo-container">
        <div class="row teaminfo-member">
            <div class="col-lg-8 offset-lg-2">
                <h2>User Profile</h2>
                <div class="table-responsive-xl">
                    <table class="table">
                        <tbody>
                            <tr>
                                <th scope=row>Name</th>
                                <td>{{ Auth::user()->name }}</td>
                            </tr>
                            <tr>
                                <th scope="row">Student ID Number</th>
                                <td>{{ Auth::user()->nim }}</td>
                            </tr>
                            <tr>
                                <th scope="row">Email</th>
                                <td>{{ Auth::user()->email }}</td>
                            </tr>
                            <tr>
                                <th scope="row">Affiliation</th>
                                <td>{{ Auth::user()->afiliasi }}</td>
                            </tr>
                            <tr>
                                <th scope="row">Phone Number</th>
                                <td>{{ Auth::user()->phoneNumber }}</td>
                            </tr>
                            <tr>
                                <th scope="row">Line ID</th>
                                <td>{{ Auth::user()->lineID }}</td>
                            </tr>
                        </tbody>
                    </table>
                    <a href="/user-profile/edit-profile" class="primary-button">
                        <i class="fas fa-user-cog"></i>
                        &ensp;Edit User Profile
                    </a>
                </div>
           </div>
        </div>
    <script>$('#ganti').addClass("active")</script>
@endsection