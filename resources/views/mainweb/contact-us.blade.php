@extends('mainweb\index_main')
@section('content')

        <section class="headings">
            <div class="text-heading text-center">
                <div class="container">
                    <h1>Contact Us</h1>
                    <h2><a href="{{ Route('index') }}">Home </a> &nbsp;/&nbsp; Contact Us</h2>
                </div>
            </div>
        </section>
        <!-- END SECTION HEADINGS -->

        <!-- START SECTION CONTACT US -->
        <section class="contact-us">
            <div class="container">
                <div class="property-location mb-5">
                    <h3>Our Location</h3>
                    <div class="divider-fade"></div>
                    <div id="map-contact" class="contact-map"></div>
                </div>
                @if(Session::has('success'))
                    <div class="alert alert-success">
                        {{ Session::get('success') }}
                    </div>
                @endif
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                <div class="row">
                    <div class="col-lg-8 col-md-12">
                        <h3 class="mb-4">Contact Us</h3>
                        <form name="contactform" action="{{ Route('save-general-query') }}" method="post">
                            @csrf
                            <div class="form-group">
                                <input type="text" class="form-control" name="name" placeholder="Your Name">
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" name="email" placeholder="Email">
                            </div>
                            <div class="form-group">
                                <input oninput="validateInput(event)" type="text" class="form-control" name="phone" placeholder="Mobile Number">
                            </div>
                            <div class="form-group">
                                <textarea class="form-control" name="message" rows="8" placeholder="Message"></textarea>
                            </div>
                            <button type="submit" class="btn btn-primary btn-lg">Submit</button>
                        </form>
                    </div>
                    <div class="col-lg-4 col-md-12 bgc">
                        <div class="call-info">
                            <h3>Contact Details</h3>
                            <p class="mb-5">Please find below contact details and contact us today!</p>
                            <ul>
                                <li>
                                    <div class="info">
                                        <i class="fa fa-map-marker" aria-hidden="true"></i>
                                        <p class="in-p">NRK Business Park, Indore</p>
                                    </div>
                                </li>
                                <li>
                                    <div class="info">
                                        <i class="fa fa-phone" aria-hidden="true"></i>
                                        <p class="in-p">+91 9691565883</p>
                                    </div>
                                </li>
                                <li>
                                    <div class="info">
                                        <i class="fa fa-envelope" aria-hidden="true"></i>
                                        <p class="in-p ti">intouchsoftware.co.in</p>
                                    </div>
                                </li>
                                <li>
                                    <div class="info cll">
                                        <i class="fa fa-clock-o" aria-hidden="true"></i>
                                        <p class="in-p ti">9:00 a.m - 9:00 p.m</p>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- END SECTION CONTACT US -->
        @endsection
@section('jscontent')
<script>
    function validateInput(event){
        const input = event.target;
        const sanitizedValue = input.value.replace(/[^0-9]/g, '');
        input.value =sanitizedValue;
    }
</script>
@endsection 