@extends('layouts.app')

@section('content')
<ol class="breadcrumb">
    <li class="breadcrumb-item">Profile</li>
</ol>
<div class="container-fluid">
    <div class="animated fadeIn">
        @include('flash::message')

        <div class="row">
            <div class="col-md-12">
                <div class="section-body">
                    <h2 class="section-title">Hi, {{ auth()->user()->name }}!</h2>
                    <p class="section-lead">
                        Change information about yourself on this page.
                    </p>

                    <div class="row mt-sm-4">
                        <div class="col-12 col-md-12 col-lg-5">
                            <div class="row">
                                <div class="col-12 col-md-12 col-lg-12">
                                    <div class="card profile-widget">
                                        <div class="profile-widget-header">
                                            <img alt="image" src="../assets/img/avatar/avatar-1.png" class="rounded-circle profile-widget-picture">
                                            <div class="profile-widget-items">
                                                <div class="profile-widget-item">
                                                    <div class="profile-widget-item-label">Posts</div>
                                                    <div class="profile-widget-item-value">1</div>
                                                </div>
                                                <div class="profile-widget-item">
                                                    <div class="profile-widget-item-label">Likes</div>
                                                    <div class="profile-widget-item-value">6,8K</div>
                                                </div>

                                            </div>
                                        </div>
                                        <div class="profile-widget-description">
                                            <div class="profile-widget-name">{{ auth()->user()->name }}
                                                <div class="text-muted d-inline font-weight-normal">
                                                    <div class="slash"></div> {{ auth()->user()->role->name }}
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                                <div class="col-12 col-md-12 col-lg-12">
                                    <div class="card">
                                        <form method="post" class="needs-validation" novalidate="">
                                            <div class="card-header">
                                                <h4>Change Password</h4>
                                            </div>
                                            <div class="card-body">
                                                <div class="row">
                                                    <div class="form-group col-md-12 col-12">
                                                        <label>Current Password</label>
                                                        <input type="password" name="current_password" class="form-control" value="" required="">
                                                        <div class="invalid-feedback">
                                                            Please fill in the Current Password
                                                        </div>
                                                    </div>

                                                </div>

                                                <div class="row">
                                                    <div class="form-group col-md-6 col-12">
                                                        <label>New Password</label>
                                                        <input type="password" name="password" class="form-control" value="" required="">
                                                        <div class="invalid-feedback">
                                                            Please fill in the Password
                                                        </div>
                                                    </div>
                                                    <div class="form-group col-md-6 col-12">
                                                        <label>Confirm New Password</label>
                                                        <input type="password" name="confirm_password" class="form-control" value="" required="">
                                                        <div class="invalid-feedback">
                                                            Please fill in the Confirm Password
                                                        </div>
                                                    </div>
                                                </div>


                                            </div>
                                            <div class="card-footer text-right">
                                                <button class="btn btn-primary">Update Password</button>
                                            </div>
                                        </form>
                                    </div>

                                </div>

                            </div>


                        </div>


                        <div class="col-12 col-md-12 col-lg-7">
                            <div class="card">
                                <form method="post" class="needs-validation" novalidate="">
                                    <div class="card-header">
                                        <h4>Edit Profile</h4>
                                    </div>
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="form-group col-md-12 col-12">
                                                <label>Full Name</label>
                                                <input type="text" class="form-control" value="{{ auth()->user()->name }}" required="">
                                                <div class="invalid-feedback">
                                                    Please fill in the full name
                                                </div>
                                            </div>

                                        </div>
                                        <div class="row">
                                            <div class="form-group col-md-7 col-12">
                                                <label>Email</label>
                                                <input type="email" class="form-control" value="{{ auth()->user()->email }}" required="">
                                                <div class="invalid-feedback">
                                                    Please fill in the email
                                                </div>
                                            </div>
                                            <div class="form-group col-md-5 col-12">
                                                <label>Phone</label>
                                                <input type="tel" class="form-control" value="{{ auth()->user()->phone }}">
                                            </div>
                                        </div>


                                    </div>
                                    <div class="card-footer text-right">
                                        <button class="btn btn-primary">Save Changes</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


        </div>
    </div>
</div>

@endsection

@push('js')
<script src="../node_modules/summernote/dist/summernote-bs4.js"></script>


@endpush
