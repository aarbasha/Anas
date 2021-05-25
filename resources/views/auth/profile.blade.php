@extends('layouts.app')
@section('title', 'Edit Profile')
@section('content')
    <div class="main-panel">
        <div class="content-wrapper">
            <div class="page-header">
                <h3 class="page-title"> Basic Tables </h3>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#">Tables</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Basic tables</li>
                    </ol>
                </nav>
            </div>
            <div class="row">
                <div class="col-lg-12">

                </div>
                <div class="col-lg-12 grid-margin stretch-card">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">Edit Profile</h4>
                            <style type="text/css">
                                .account-settings .user-profile {
                                    margin: 0 0 1rem 0;
                                    padding-bottom: 1rem;
                                    text-align: center;
                                }

                                .account-settings .user-profile .user-avatar {
                                    margin: 0 0 1rem 0;
                                }

                                .account-settings .user-profile .user-avatar img {
                                    width: 150px;
                                    height: 150px;
                                    -webkit-border-radius: 100px;
                                    -moz-border-radius: 100px;
                                    border-radius: 100px;
                                }

                                .account-settings .user-profile h3.user-name {
                                    margin: 0 0 0.5rem 0;
                                }

                                .account-settings .user-profile h6.user-email {
                                    margin: 0;
                                    font-size: 0.8rem;
                                    font-weight: 400;
                                    /* color: #9fa8b9; */
                                }

                                .account-settings .about {
                                    margin: 2rem 0 0 0;
                                    text-align: center;
                                }

                                .account-settings .about h3 {
                                    margin: 0 0 15px 0;
                                    /* color: #007ae1; */
                                }

                                .account-settings .about p {
                                    font-size: 0.825rem;
                                }

                                .form-control {
                                    /* border: 1px solid #cfd1d8; */
                                    -webkit-border-radius: 2px;
                                    -moz-border-radius: 2px;
                                    border-radius: 2px;
                                    font-size: .825rem;
                                    /* background: #ffffff; */
                                    color: #ffffff;
                                }

                                .card {
                                    /* background: #ffffff; */
                                    -webkit-border-radius: 5px;
                                    -moz-border-radius: 5px;
                                    border-radius: 5px;
                                    border: 0;
                                    margin-bottom: 1rem;
                                }

                            </style>
                            </head>

                            <body>
                                <div class="container">
                                    <div class="row gutters">
                                        <div class="col-xl-3 col-lg-3 col-md-12 col-sm-12 col-12">
                                            <div class="card h-100">
                                                <div class="card-body">
                                                    <div class="account-settings">
                                                        <div class="user-profile">
                                                            <div class="user-avatar">
                                                                <img src="{{ Auth::user()->avatar }}"
                                                                    alt="Maxwell Admin">


                                                            </div>
                                                            <h3 class="user-name">{{ Auth::user()->name }}</h3>
                                                            <h6 class="user-email">{{ Auth::user()->email }}</h6>


                                                            <input type="file" class="form-control mt-2">
                                                        </div>
                                                        <div class="about">
                                                            <h5>About</h5>
                                                            <p>I'm Yuki. Full Stack Designer I enjoy creating user-centric,
                                                                delightful and human experiences.</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xl-9 col-lg-9 col-md-12 col-sm-12 col-12">
                                            <div class="card h-100">
                                                <div class="card-body">
                                                    <div class="row gutters">
                                                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                                            <h6 class="mb-2 text-primary">Personal Details</h6>
                                                        </div>
                                                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                                                            <div class="form-group">
                                                                <label for="fullName">Full Name</label>
                                                                <input type="text" class="form-control" id="fullName"
                                                                    placeholder="Enter full name">
                                                            </div>
                                                        </div>
                                                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                                                            <div class="form-group">
                                                                <label for="eMail">Email</label>
                                                                <input type="email" class="form-control" id="eMail"
                                                                    placeholder="Enter email ID">
                                                            </div>
                                                        </div>
                                                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                                                            <div class="form-group">
                                                                <label for="phone">Phone</label>
                                                                <input type="text" class="form-control" id="phone"
                                                                    placeholder="Enter phone number">
                                                            </div>
                                                        </div>
                                                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                                                            <div class="form-group">
                                                                <label for="website">Website URL</label>
                                                                <input type="url" class="form-control" id="website"
                                                                    placeholder="Website url">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row gutters">
                                                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                                            <h6 class="mt-3 mb-2 text-primary">Address</h6>
                                                        </div>
                                                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                                                            <div class="form-group">
                                                                <label for="Street">Street</label>
                                                                <input type="name" class="form-control" id="Street"
                                                                    placeholder="Enter Street">
                                                            </div>
                                                        </div>
                                                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                                                            <div class="form-group">
                                                                <label for="ciTy">City</label>
                                                                <input type="name" class="form-control" id="ciTy"
                                                                    placeholder="Enter City">
                                                            </div>
                                                        </div>
                                                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                                                            <div class="form-group">
                                                                <label for="sTate">State</label>
                                                                <input type="text" class="form-control" id="sTate"
                                                                    placeholder="Enter State">
                                                            </div>
                                                        </div>
                                                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                                                            <div class="form-group">
                                                                <label for="zIp">Zip Code</label>
                                                                <input type="text" class="form-control" id="zIp"
                                                                    placeholder="Zip Code">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row gutters">
                                                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                                            <div class="text-right">
                                                                <button type="button" id="submit" name="submit"
                                                                    class="btn btn-primary">Cancel</button>
                                                                <button type="button" id="submit" name="submit"
                                                                    class="btn btn-success">Update</button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                        </div>
                    </div>
                </div>

            </div>
        </div>
        <!-- content-wrapper ends -->
        <!-- partial:../../partials/_footer.html -->

        <!-- partial -->
    </div>
@endsection
