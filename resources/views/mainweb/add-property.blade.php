@extends('mainweb.index_main')
@section('csscontent')
<link rel="stylesheet" href="{{asset('css/edit.css')}}">
@endsection
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
                            <div class="container">
                                <div class="main">
                                        <h3>Property description and price</h3>
                                    <div class="formgroup">
                                        <div class="rows" >
                                            <div class="column-12">
                                                <p>
                                                    
                                                    <label for="title">Property Title</label>
                                                    <input value="{{ old('title') }}" type="text" name="title">
                                                </p>
                                            </div>
                                        </div>
                                        <div class="rows">
                                            <div class="column-12">
                                                <p>
                                                    <label for="description">Property Description</label>
                                                    <textarea name="description">{{ old('description') }}</textarea>
                                                </p>
                                            </div>
                                        </div>
                                        <div class="rows">
                                            <div class="column-6 column-12">
                                                <p>
                                                    <label for="price">Price</label>
                                                    <input type="text" value="{{ old('price') }}" name="price">
                                                </p>
                                            </div>
                                            <div class="column-6 column-12">
                                                <p>
                                                    <label for="area">No. of seats</label>
                                                    <input type="text" value="{{ old('no_of_seats') }}" name="no_of_seats">
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="main">
                                    <h3>Property Media</h3>
                                    <div class="form-group formgroup2">
                                        <div class="image-input ">
                                            <label for="formFile">Main Image</label>
                                            <input class="formcontrol1" name="image1" type="file">
                                        </div>
                                        <div class="image-input ">
                                            <label for="formFile">Training Room</label>
                                            <input class="formcontrol1" name="image2" type="file">
                                        </div>
                                        <div class="image-input ">
                                            <label for="formFile">Meeting Room</label>
                                            <input class="formcontrol1" name="image3" type="file">
                                        </div>
                                        <div class="image-input ">
                                            <label for="formFile">Cowroking Space</label>
                                            <input class="formcontrol1" name="image4" type="file">
                                        </div>
                                        <div class="image-input ">
                                            <label for="formFile">cabin</label>
                                            <input class="formcontrol1" name="image5" type="file">
                                        </div>
                                        <div class="image-input ">
                                            <label for="formFile">Cafeteria</label>
                                            <input class="formcontrol1" name="image6" type="file">
                                        </div>
                                        <div class="image-input ">
                                            <label for="formFile">Confrence Room</label>
                                            <input class="formcontrol1" name="image7" type="file">
                                        </div>
                                    
                                    </div>
                                </div>
                                <div class="main">
                                    <h3>Property Location</h3>
                                    <div class="form-group">
                                        <div class="rows">
                                            <div class="column-6 column-12">

                                                <p>
                                                    <label for="address">Address</label>
                                                    <input type="text" value="{{ old('address') }}" name="address">
                                                </p>
                                            </div>
                                            <div class="column-6 column-12">
                                            <p>
                                                <label for="city">City</label>
                                                <input type="text" value="{{ old('city') }}" name="city">
                                            </p>
                                        </div>
                                        </div>
                                    
                                        <div class="rows">
                                            <div  class="column-6 column-12">
                                                <p>
                                                    <label for="state">State</label>
                                                    <input type="text" value="{{  old('state') }}" name="state">
                                                </p>
                                            </div>
                                            <div  class="column-6 column-12">
                                                <p>
                                                    <label for="country">Country</label>
                                                    <input type="text" value="{{  old('country') }}" name="country">
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="main">
                                    <h3>Property Features</h3>
                                    <div class="form-gropu">
                                        <div  class="rows">
                                            <ul>
                                                <li class="list">
                                                    <div >
                                                        <div class="checktoo">
                                                            <input id="check-a" type="checkbox" name="air_conditioning">
                                                            <label for="check-a">Air Conditioning</label>

                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="list">
                                                    <div >
                                                        <div class="checktoo">
                                                            <input id="check-b" type="checkbox" name="coworking">
                                                            <label for="check-b">Coworking</label>

                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="list">
                                                    <div >
                                                        <div class="checktoo">
                                                            <input id="check-c" type="checkbox" name="cabin">
                                                            <label for="check-c">Cabin</label>

                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="list">
                                                    <div >
                                                        <div class="checktoo">
                                                            <input id="check-d" type="checkbox" name="meetingrooms">
                                                            <label for="check-d">Meeting Room</label>

                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="list">
                                                    <div >
                                                        <div class="checktoo">
                                                            <input id="check-e" type="checkbox" name="air_conditioning">
                                                            <label for="check-e">Air Conditioning</label>

                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="list">
                                                    <div >
                                                        <div class="checktoo">
                                                            <input id="check-f" type="checkbox" name="trainingrooms">
                                                            <label for="check-f">Training Room</label>

                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="list">
                                                    <div >
                                                        <div class="checktoo">
                                                            <input id="check-g" type="checkbox" name="wifi">
                                                            <label for="check-g">Wifi</label>

                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="list">
                                                    <div >
                                                        <div class="checktoo">
                                                            <input id="check-h" type="checkbox" name="parking">
                                                            <label for="check-h">Parking</label>

                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="list">
                                                    <div >
                                                        <div class="checktoo">
                                                            <input id="check-i" type="checkbox" name="lounge">
                                                            <label for="check-i">Lounge</label>

                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="list">
                                                    <div >
                                                        <div class="checktoo">
                                                            <input id="check-j" type="checkbox" name="cafeteria">
                                                            <label for="check-j">Cafeteria</label>

                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="list">
                                                    <div >
                                                        <div class="checktoo">
                                                            <input id="check-k" type="checkbox" name="locker">
                                                            <label for="check-k">Locker</label>

                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="list">
                                                    <div >
                                                        <div class="checktoo">
                                                            <input id="check-l" type="checkbox" name="it_support">
                                                            <label for="check-l">IT Support</label>

                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="list">
                                                    <div >
                                                        <div class="checktoo">
                                                            <input id="check-m" type="checkbox" name="_24x7">
                                                            <label for="check-m">24X7</label>

                                                        </div>
                                                    </div>
                                                </li>
                                            
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="main">
                                    <h3>Contact Information</h3>
                                    <div class="form-group">
                                        <div class="rows">
                                                <div class="column-6 column-12">
                                                <p>
                                                    <label for="con-name">Name</label>
                                                    <input type="text" value="{{  old('name') }}" placeholder="Enter Your Name" name="name">
                                                </p>
                                                </div>
                                            <div class="column-6 column-12" >
                                                <p>
                                                    <label for="con-user">Username</label>
                                                    <input type="text" value="{{  old('username') }}" placeholder="Enter Your Username" name="username">
                                                </p>
                                            </div>
                                        </div>
                                        <div class="rows">
                                            <div class="column-6 column-12">
                                                <p>
                                                    <label for="con-email">Email</label>
                                                    <input type="email" value="{{ old('email') }}" placeholder="Enter Your Email" name="email">
                                                </p>
                                            </div>
                                            <div class="column-6 column-12">
                                                <p>
                                                    <label for="con-phn">Phone</label>
                                                    <input type="text" value="{{  old('phone') }}" oninput="validateInput(event)" placeholder="Enter Your Phone Number" name="phone">
                                                </p>
                                            </div>
                                        </div>
                                        <div class="rows">
                                            <div class="column-12">
                                                <div class="btnsubmit">
                                                    <button type="submit">Submit Property</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                        
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