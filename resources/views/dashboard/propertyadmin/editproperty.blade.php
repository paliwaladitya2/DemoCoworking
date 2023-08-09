@extends('dashboard.dashboard')
@section('content')
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
                        <form action="{{ Route('save-property') }}" method="post" enctype="multipart/form-data">
                            @csrf
                        <div class="single-add-property">
                            <h3>Property description and price</h3>
                            <div class="property-form-group">
                                
                                    <div class="row">
                                        <div class="col-md-12">
                                            <p>
                                                <label for="title">Property Title</label>
                                                <input value="{{ old('title') }}" type="text" name="title" id="title" placeholder="Enter your property title">
                                            </p>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <p>
                                                <label for="description">Property Description</label>
                                                <textarea value="{{ old('description') }}" id="description" name="description" placeholder="Describe about your property"></textarea>
                                            </p>
                                        </div>
                                    </div>
                                    
                                    <div class="row">
                                        <div class="col-lg-6 col-md-12">
                                            <p class="no-mb">
                                                <label for="price">Price</label>
                                                <input type="text" value="{{ old('price') }}" name="price" placeholder="INR" id="price">
                                            </p>
                                        </div>
                                        <div class="col-lg-6 col-md-12">
                                            <p class="no-mb last">
                                                <label for="area">No. of seats</label>
                                                <input type="text" value="{{ old('no_of_seats') }}" name="no_of_seats" placeholder="No. of seats" id="area">
                                            </p>
                                        </div>
                                    </div>
                              
                            </div>
                        </div>
                        <div class="single-add-property">
                            <h3>property Media</h3>
                            <div class="property-form-group" style="display: flex; flex-wrap:wrap; justify-content:space-between;1">
                                
                                <div class="mb-3" style="display: flex; flex-direction:column">
                                    <label for="formFile" class="form-label">Main Image</label>
                                    <input class="form-control1" name="image1"  type="file" id="formFile">
                                  </div>
                                <div class="mb-3" style="display: flex; flex-direction:column">
                                    <label for="formFile" class="form-label">Training Room</label>
                                    <input class="form-control1" name="image2" type="file" id="formFile">
                                  </div>
                                <div class="mb-3" style="display: flex; flex-direction:column">
                                    <label for="formFile" class="form-label">Meeting Room</label>
                                    <input class="form-control1" name="image3" type="file" id="formFile">
                                  </div>
                                <div class="mb-3" style="display: flex; flex-direction:column">
                                    <label for="formFile" class="form-label">Coworking Space</label>
                                    <input class="form-control1" name="image4" type="file" id="formFile">
                                  </div>
                                <div class="mb-3" style="display: flex; flex-direction:column">
                                    <label for="formFile" class="form-label">Cabin</label>
                                    <input class="form-control1" name="image5" type="file" id="formFile">
                                  </div>
                                <div class="mb-3" style="display: flex; flex-direction:column">
                                    <label for="formFile" class="form-label">Cafeteria</label>
                                    <input class="form-control1" name="image6" type="file" id="formFile">
                                  </div>
                                <div class="mb-3" style="display: flex; flex-direction:column">
                                    <label for="formFile" class="form-label">Confrence Room</label>
                                    <input class="form-control1" name="image7" type="file" id="formFile">
                                  </div>
                                  
                            </div>
                        </div>
                        <div class="single-add-property">
                            <h3>property Location</h3>
                            <div class="property-form-group">
                                <div class="row">
                                    <div class="col-lg-6 col-md-12">
                                        <p>
                                            <label for="address">Address</label>
                                            <input type="text" value="{{ old('address') }}" name="address" placeholder="Enter Your Address" id="address">
                                        </p>
                                    </div>
                                    <div class="col-lg-6 col-md-12">
                                        <p>
                                            <label for="city">City</label>
                                            <input type="text" value="{{ old('city') }}" name="city" placeholder="Enter Your City" id="city">
                                        </p>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-6 col-md-12">
                                        <p>
                                            <label for="state">State</label>
                                            <input type="text" value="{{ old('state') }}" name="state" placeholder="Enter Your State" id="state">
                                        </p>
                                    </div>
                                    <div class="col-lg-6 col-md-12">
                                        <p>
                                            <label for="country">Country</label>
                                            <input type="text" value="{{ old('country') }}" name="country" placeholder="Enter Your Country" id="country">
                                        </p>
                                    </div>
                                </div>
                               
                            </div>
                        </div>
                      
                        <div class="single-add-property">
                            <h3>Property Features</h3>
                            <div class="property-form-group">
                                <div class="row">
                                    <div class="col-md-12">
                                        <ul class="pro-feature-add pl-0">
                                            <li class="fl-wrap filter-tags clearfix">
                                                <div class="checkboxes float-left">
                                                    <div class="filter-tags-wrap">
                                                        <input id="check-a" type="checkbox" name="air_conditioning">
                                                        <label for="check-a">Air Conditioning</label>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="fl-wrap filter-tags clearfix">
                                                <div class="checkboxes float-left">
                                                    <div class="filter-tags-wrap">
                                                        <input id="check-b" type="checkbox" name="coworking">
                                                        <label for="check-b">Coworking</label>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="fl-wrap filter-tags clearfix">
                                                <div class="checkboxes float-left">
                                                    <div class="filter-tags-wrap">
                                                        <input id="check-c" type="checkbox" name="cabin">
                                                        <label for="check-c">Cabin</label>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="fl-wrap filter-tags clearfix">
                                                <div class="checkboxes float-left">
                                                    <div class="filter-tags-wrap">
                                                        <input id="check-d" type="checkbox" name="meetingrooms">
                                                        <label for="check-d">Meeting Room</label>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="fl-wrap filter-tags clearfix">
                                                <div class="checkboxes float-left">
                                                    <div class="filter-tags-wrap">
                                                        <input id="check-e" type="checkbox" name="trainingrooms">
                                                        <label for="check-e">Training Rooom</label>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="fl-wrap filter-tags clearfix">
                                                <div class="checkboxes float-left">
                                                    <div class="filter-tags-wrap">
                                                        <input id="check-g" type="checkbox" name="wifi">
                                                        <label for="check-g">Wifi</label>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="fl-wrap filter-tags clearfix">
                                                <div class="checkboxes float-left">
                                                    <div class="filter-tags-wrap">
                                                        <input id="check-h" type="checkbox" name="parking">
                                                        <label for="check-h">Parking</label>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="fl-wrap filter-tags clearfix">
                                                <div class="checkboxes float-left">
                                                    <div class="filter-tags-wrap">
                                                        <input id="check-i" type="checkbox" name="lounge">
                                                        <label for="check-i">Lounge</label>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="fl-wrap filter-tags clearfix">
                                                <div class="checkboxes float-left">
                                                    <div class="filter-tags-wrap">
                                                        <input id="check-j" type="checkbox" name="cafeteria">
                                                        <label for="check-j">Cafeteria</label>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="fl-wrap filter-tags clearfix">
                                                <div class="checkboxes float-left">
                                                    <div class="filter-tags-wrap">
                                                        <input id="check-k" type="checkbox" name="it_support">
                                                        <label for="check-k">IT support</label>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="fl-wrap filter-tags clearfix">
                                                <div class="checkboxes float-left">
                                                    <div class="filter-tags-wrap">
                                                        <input id="check-l" type="checkbox" name="locker">
                                                        <label for="check-l">Locker</label>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="fl-wrap filter-tags clearfix">
                                                <div class="checkboxes float-left">
                                                    <div class="filter-tags-wrap">
                                                        <input id="check-m" type="checkbox" name="_24x7">
                                                        <label for="check-m">24X7</label>
                                                    </div>
                                                </div>
                                            </li>
                                           
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="single-add-property">
                            <h3>Contact Information</h3>
                            <div class="property-form-group">
                                <div class="row">
                                    <div class="col-lg-6 col-md-12">
                                        <p>
                                            <label for="con-name">Name</label>
                                            <input type="text" value="{{ old('name') }}" placeholder="Enter Your Name" id="con-name" name="name">
                                        </p>
                                    </div>
                                    <div class="col-lg-6 col-md-12">
                                        <p>
                                            <label for="con-user">Username</label>
                                            <input type="text" value="{{ old('username') }}" placeholder="Enter Your Username" id="con-user" name="username">
                                        </p>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-6 col-md-12">
                                        <p class="no-mb first">
                                            <label for="con-email">Email</label>
                                            <input type="email" value="{{ old('email') }}" placeholder="Enter Your Email" id="con-email" name="email">
                                        </p>
                                    </div>
                                    <div class="col-lg-6 col-md-12">
                                        <p class="no-mb last">
                                            <label for="con-phn">Phone</label>
                                            <input type="text" value="{{ old('phone') }}" oninput="validateInput(event)" placeholder="Enter Your Phone Number" id="con-phn" name="phone">
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="add-property-button pt-5">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="prperty-submit-button">
                                            <button type="submit">Submit Property</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>

@endsection