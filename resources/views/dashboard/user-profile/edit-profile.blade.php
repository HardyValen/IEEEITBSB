@section('title', 'Edit User Profile')

@section('sidebar')
    @include('dashboard/subsection/sidebar/sidebar-landing-normal')
@endsection

@section('topbar')
    @include('dashboard/subsection/topbar/topbar-landing-normal')
@endsection

@extends('layouts.dashboard')
@section('content')

    <form action="/user-profile/edit-profile" method="post">
    @csrf
    <div class="teaminfo-container">
        <div class="row teaminfo-member">
            <div class="col-lg-8 offset-lg-2">
                &larr;&ensp;<a href='/user-profile'>User Profile</a>
                <h2>Edit User Profile</h2>
                <div class="table-responsive-xl">
                    <table class="table">
                        <tbody>
                            <tr>
                                <th scope=row>Name</th>
                                <td>
                                    <input class='form-control' type="text" name="name" id="name" value="{{ Auth::user()->name }}" required>
                                </td>
                            </tr>
                            <tr>
                                <th scope="row">Student ID Number</th>
                                <td>
                                    <input class='form-control' type="text" name="nim" id="name" value="{{ Auth::user()->nim }}" required>
                                </td>
                            </tr>
                            <tr>
                                <th scope="row">Affiliation</th>
                                <td>
                                    <input class='form-control' type="text" name="afiliasi" id="name" value="{{ Auth::user()->afiliasi }}" required>
                                </td>
                            </tr>
                            <tr>
                                <th scope="row">Phone Number</th>
                                <td>
                                    <input class='form-control' type="text" name="phoneNumber" id="name" value="{{ Auth::user()->phoneNumber }}" required>
                                </td>
                            </tr>
                            <tr>
                                <th scope="row">Line ID</th>
                                <td>
                                    <input class='form-control' type="text" name="lineID" id="name" value="{{ Auth::user()->lineID }}" required>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                    <button type="submit" class='primary-button'>
                        <i class="fas fa-user-cog"></i>
                        &ensp;Edit User Profile
                    </button>
                </div>
           </div>
        </div>
    </form>
    <script>$('#ganti').addClass("active")</script>
@endsection