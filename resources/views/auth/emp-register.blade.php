@extends('layouts.main')

@section('content')
    <hr>
    <div class="site-section">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    @if(Session::has('message'))
                        <div class=" alert alert-success">
                            {{Session::get('message')}}
                        </div>
                    @endif

                    <form method="POST" action="{{ route('employer.store') }}">
                        @csrf
                        <input type="hidden" value="employer" name="user_type">
                        <div class="form-group row">
                            <label for="cname" class="col-md-4 col-form-label text-md-right">{{ __(' Company Name') }}</label>

                            <div class="col-md-6">
                                <input id="cname" type="text" class="form-control form-control-sm @error('cname') is-invalid @enderror" name="cname" value="{{ old('cname') }}" required autocomplete="name" autofocus>

                                @error('cname')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control form-control-sm @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>





                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control form-control-sm @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control form-control-sm" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
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


