@extends('frontend.layout.registerapp')

@section('content')
<div class="row justify-content-center mt-5">
    <div class="col-md-8" id="signup">
        <div class="card">
            <div class="card-header text-center"><img src="{{asset('/images/slogo1.png')}}" alt="school logo"/> CATHOLIC UNIVERSITY COLLEGE OF GHANA</div>

            <div class="card-body">
                <form method="post" action="{{route('pages.registerstore')}}">
                    @csrf
                    {{--FULL NAME--}}
                    <div class="form-group row">
                        <label for="name" class="col-md-4 col-form-label text-md-right">Enter Full Name</label>

                        <div class="col-md-6">
                            <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus placeholder="please enter full name" minlength="7" maxlength="100">

                            @error('name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>

                    {{--INDEX NUMBER--}}
                    <div class="form-group row">
                        <label for="index_number" class="col-md-4 col-form-label text-md-right">Enter Index Number</label>

                        <div class="col-md-6">
                            <input id="index_number" type="text" class="form-control @error('index_number') is-invalid @enderror" name="index_number" value="{{ old('index_number') }}" required autocomplete="index_number" autofocus placeholder="example: ugr0201610162" minlength="13" maxlength="13">

                            @error('index_number')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>

                        {{--FACULTY--}}
                        <div class="form-group row">
                            <label for="faculty" class="col-md-4 col-form-label text-md-right">Choose Faculty</label>

                            <div class="col-md-6">
                                <select name="faculty" id="faculty" required>
                                    <option value="Select Your Faculty">Select Your Faculty</option>
                                    <option value="Information Communication and Technology">Information Communication and Technology</option>
                                    <option value="Economics and Business Adminstration">Economics and Business Adminstration</option>
                                    <option value="Health and Allied Science">Health and Allied Science</option>
                                    <option value="Nursing">Nursing</option>
                                    <option value="Education">Education</option>
                                    <option value="Religious Studies">Religious Studies</option>
                                </select>
                            </div>
                        </div>

                        {{--EMAIL--}}
                    <div class="form-group row">
                        <label for="email" class="col-md-4 col-form-label text-md-right">E-Mail Address</label>

                        <div class="col-md-6">
                            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" placeholder="example: charlesbasoah93@gmail.com">

                            @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>

                    {{-- PHONE NUMBER--}}
                    <div class="form-group row">
                        <label for="phone" class="col-md-4 col-form-label text-md-right">Phone Number</label>

                        <div class="col-md-6">
                            <input id="phone" type="number" class="form-control @error('phone') is-invalid @enderror" name="phone" value="{{ old('phone') }}" required autocomplete="phone" placeholder="example: 054XXXXXXX" minlength="10" maxlength="10">

                            @error('phone')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>

                    {{--PASSWORD--}}
                    <div class="form-group row">
                        <label for="password" class="col-md-4 col-form-label text-md-right">Password</label>

                        <div class="col-md-6">
                            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password" placeholder="please enter password">

                            @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="password-confirm" class="col-md-4 col-form-label text-md-right">Confirm Password</label>

                        <div class="col-md-6">
                            <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password" placeholder="please repeat password">
                        </div>
                    </div>

                    {{--COUNTRY--}}
                    <div class="form-group row">
                        <label for="country" class="col-md-4 col-form-label text-md-right">Choose Country</label>

                        <div class="col-md-6">
                            <select name="country" id="country">
                                <option value="Select Your country">Select Your Country</option>
                                <option value="Ghana">Ghana</option>
                                <option value="Nigeria">Nigeria</option>
                                <option value="cote d'ivore">Cote d'ivove</option>
                                <option value="Togo">Togo</option>
                                <option value="Benin">Benin</option>

                            </select>
                        </div>
                    </div>

                    <div class="form-group row mb-0">
                        <div class="col-md-6 offset-md-4">
                            <button type="submit" class="btn btn-primary">
                                Register
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

@endsection
