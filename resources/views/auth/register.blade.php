@extends('layouts.main')

@section('content')
   <div class="site-section bg-light">
       <div class="container">
           <div class="row justify-content-center">
               <div class="col-md-12 col-lg-8 col-sm-6">
                   <form method="POST" action="{{ route('register') }}">
                       @csrf
                       <input type="hidden" value="seeker" name="user_type">
                       <div class="form-group row">
                           <div class="col-md-12">Name</div>

                           <div class="col-md-8">
                               <input id="name" type="text" class="form-control form-control-sm @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                               @error('name')
                               <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                               @enderror
                           </div>
                       </div>

                       <div class="form-group row">
                           <div class="col-md-12">Email</div>

                           <div class="col-md-8">
                               <input id="email" type="email" class="form-control form-control-sm @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                               @error('email')
                               <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                               @enderror
                           </div>
                       </div>

                       {{--Date of Birth--}}

                       <div class="form-group row">
                           <div class="col-md-12">Date Of Birth</div>

                           <div class="col-md-8">
                               <input id="dob" type="date" class="form-control form-control-sm @error('dob') is-invalid @enderror" name="dob" value="{{ old('dob') }}" required autocomplete="dob">

                               @error('email')
                               <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                               @enderror
                           </div>
                       </div>
                       {{--Gender--}}

                       <div class="form-group row">
                           <div class="col-md-12">Gender</div>

                           <div class="col-md-8">
                               <input type="radio" value="male" name="gender">Male
                               <input type="radio" value="female" name="gender">Female
                               @error('gender')
                               <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                               @enderror
                           </div>
                       </div>

                       <div class="form-group row">
                           <div class="col-md-12">Password</div>

                           <div class="col-md-8">
                               <input id="password" type="password" class="form-control form-control-sm @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                               @error('password')
                               <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                               @enderror
                           </div>
                       </div>

                       <div class="form-group row">
                          <div class="col-md-12">Confirm Password</div>

                           <div class="col-md-8">
                               <input id="password-confirm" type="password" class="form-control form-control-sm" name="password_confirmation" required autocomplete="new-password">
                           </div>
                       </div>

                       <div class="form-group row mb-0">
                           <div class="col-md-4 offset-md-4">
                               <button type="submit" class="btn btn-primary">
                                   {{ __('Register') }}
                               </button>
                           </div>
                       </div>
                   </form>
               </div>
           </div>
       </div>
   </div>
@endsection
