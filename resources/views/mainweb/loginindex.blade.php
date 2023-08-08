@extends('mainweb\index_main')
@section('content')
        <section class="headings">
            <div class="text-heading text-center">
                <div class="container">
                    <h1>Login Or Register</h1>
                    <h2><a href="{{ Route('index') }}">Home </a> &nbsp;/&nbsp; login Register</h2>
                </div>
            </div>
        </section>
        <!-- END SECTION HEADINGS -->

        <!-- START SECTION LOGIN -->
        <div class="container">
            <div class="row">
                @if(Session::has('danger'))
                    <div class="alert alert-danger">
                        {{ Session::get('danger') }}
                    </div>
                @endif
                @if(Session::has('errors'))
                    <div class="alert alert-danger">
                        {{ Session::get('errors') }}
                    </div>
                @endif
                <div class="col-4">
                    <div id="login">
                        <div class="card mt-5 mb-5 w-100">
                            <div class="card-header">
                                <h2 style="text-align: center;margin-bottom: 20px;text-transform:none;font-weight: 600;">Login</h2>
                            </div>
                            <div class="card-body">
                                <div class="login">
                                    <form action="{{ Route('logincheck') }}" method="post">
                                        @csrf
                                        <div class="row">
                                            <div class="col-12">
                                                <div class="form-group">
                                                    <label>Email</label>
                                                    <input type="email" class="form-control" name="email" id="email">
                                                    <i class="icon_mail_alt"></i>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-12">
                                                <div class="form-group">
                                                    <label>Password</label>
                                                    <input type="password" class="form-control" name="password" id="password" value="">
                                                    <i class="icon_lock_alt"></i>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="fl-wrap filter-tags clearfix add_bottom_30">
                                            <div class="float-right mt-1"><a id="forgot" href="javascript:void(0);">Forgot Password?</a></div>
                                        </div>
                                        <button class="btn_1 rounded full-width" type="submit">Login to Account</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="col-8">
                    <div id="login">
                        <div class="card mt-5 mb-5">
                            <div class="card-header">
                                <h2 style="text-align: center;margin-bottom: 20px;text-transform:none;font-weight: 600;">Register</h2>
                            </div>
                            <div class="card-body">
                                <div class="login">
                                    <form action="{{ Route('saveregister') }}" method="post">
                                        @csrf
                                        <div class="row">
                                            <div class="col-6">
                                                <div class="form-group">
                                                    <label>Your Name</label>
                                                    <input class="form-control" name="name" type="text">
                                                    <i class="ti-user"></i>
                                                </div>
                                            </div>
                                            <div class="col-6">
                                                <div class="form-group">
                                                    <label>Your Mobile Number</label>
                                                    <input class="form-control" oninput="validateInput(event)" name="phone" type="text">
                                                    <i class="ti-user"></i>
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <div class="form-group">
                                                    <label>Your Email</label>
                                                    <input class="form-control" name="email" type="email">
                                                    <i class="icon_mail_alt"></i>
                                                </div>
                                            </div>
                                            <div class="col-6">
                                                <div class="form-group">
                                                    <label>Your password</label>
                                                    <input class="form-control" type="password" id="password1" name="password">
                                                    <i class="icon_lock_alt"></i>
                                                </div>
                                            </div>
                                            <div class="col-6">
                                                <div class="form-group">
                                                    <label>Confirm password</label>
                                                    <input class="form-control" type="password" id="password2" name="confirm_password">
                                                    <i class="icon_lock_alt"></i>
                                                </div>
                                            </div>
                                        </div>
                                        <div id="pass-info" class="clearfix"></div>
                                        <button type="submit" class="btn_1 rounded mt-2 full-width add_top_30">Register Now!</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        

        
        <!-- END SECTION LOGIN -->
@endsection