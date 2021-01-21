@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row ">
            <div class="col-md-3">
                @if (empty(Auth::user()->profile->avatar))
                <img style="100%" src="{{asset('avatar/company-logo.png')}}" width="200" height="200" >
                @else
                    <img style=" 100%" src="{{asset('uploads/avatar')}}/{{Auth::user()->profile->avatar}}" width="200" height="200" >
                @endif
                <form action="{{route('profile.avatar')}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <br>
                    <div class="card">
                        <div class="card-header">Change Your Profile</div>
                        <div class="card-body">
                            <input type="file" name="avatar" class=" form-control" >
                            <br>
                            <button class="btn btn-primary">Update</button>
                        </div>

                        @if($errors->has('avatar'))
                            <div class="error" style="color:red">
                                {{$errors->first('avatar')}}
                            </div>
                        @endif
                    </div>
                </form>
            </div>
            <div class="col-md-5">
                <div class="card">
                    <div class="card-header bg-success">Update Your Information</div>
                    <div class="card-body">
                        <form action="{{route('profile.store')}}" method="post">
                            @csrf
                        <div class="form-group">
                            <label>Address</label>

                            <textarea class="form-control" rows="3" name="address">
                                {{Auth::user()->profile->address}}
                            </textarea>
                        </div>
                   {{-- Error Exception--}}
                            @if($errors->has('address'))
                                <div class="error" style="color:red">
                                    {{$errors->first('address')}}
                                </div>
                               @endif
                            <div class="form-group">
                                <label>Phone Number</label>
                               <p></p>
                                <input type="text" value="{{Auth::user()->profile->phone_number}}"  name="phone_number" class="form-control" rows="3"  >


                            </div>
                            @if($errors->has('phone_number'))
                                <div class="error" style="color:red">
                                    {{$errors->first('phone_number')}}
                                </div>
                            @endif

                        <div class="form-group">
                            <label>Experience</label>

                            <textarea class="form-control" rows="3" name="experience">
                                 {{Auth::user()->profile->experience}}

                            </textarea>
                        </div>
                            {{-- Error Exception--}}
                            @if($errors->has('experience'))
                                <div class="error" style="color:red">
                                    {{$errors->first('experience')}}
                                </div>
                            @endif
                        <div class="form-group">
                            <label>BIODATA</label>

                            <textarea class="form-control" rows="3" name="bio">
                                    {{Auth::user()->profile->bio}}
                            </textarea>
                        </div>
                            @if($errors->has('bio'))
                                <div class="error" style="color:red">
                                    {{$errors->first('bio')}}
                                </div>
                            @endif

                        <div class="form-group">
                            <button class="btn btn-primary">Submit</button>

                        </div>
                            @if(Session:: has('message'))
                                <div class="alert alert-success">
                                    {{Session::get('message')}}
                                </div>
                            @endif
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <div class="card-header bg-success">User Details</div>
                    <div class="card-body">
                        <p><i class="fas fa-file-signature ">file-signature</i><b>Name:&nbsp;{{Auth::user()->name}}</b></p>
                        <p><i class="fas fa-envelope ">envelope</i><b>Email:&nbsp;{{Auth::user()->email}}</b></p>
                        <p><i class="fas fa-address-book  " >address-book</i><b>Address:&nbsp;{{Auth::user()->profile->address}}</b></p>
                        <p><i class="fas fa-address-book  " >address-book</i><b>Phone:&nbsp;{{Auth::user()->profile->phone_number}}</b></p>
                        <p><i class="fas fa-brain ">brain</i><b>Experience:&nbsp;{{Auth::user()->profile->experience}}</b></p>
                        <p><i class="fas fa-street-view">street-view</i><b>Biodata:&nbsp;{{Auth::user()->profile->bio}}</b></p>
                        <p><i class="fas fa-user-clock">user-clock</i><b>Member Since:&nbsp;</b>{{date('F d Y',strtotime(Auth::user()->profile->created_at))}}</p>

                        @if(!empty(Auth::user()->profile->cover_letter))

                            <p>
                                <a href="{{Storage::url(Auth::user()->profile->cover_letter)}}"><i class="fas fa-file-download">file-download</i>Cover Letter</a>

                            </p>
                        @else
                            <p class="text-danger"> Please Upload Your Cover Letter;</p>
                          @endif



                        @if(!empty(Auth::user()->profile->resume))

                            <p>
                                <a href="{{Storage::url(Auth::user()->profile->resume)}}"><i class="fas fa-file-download">file-download</i>Resume</a>

                            </p>
                        @else
                          <p class="text-danger"> Please Upload Your Resume;</p>
                        @endif

                    </div>

                </div>
                <form action="{{route('profile.coverletter')}}" method="post" enctype="multipart/form-data">
                @csrf
                    <div class="card">
                    <div class="card-header  bg-success">Update Cover Letter</div>
                    <div class="card-body">
                       <input type="file" name="cover_letter" class=" form-control" >
                        <br>
                        <button class="btn btn-primary">Update</button>
                    </div>

                        @if($errors->has('cover_letter'))
                            <div class="error" style="color:red">
                                {{$errors->first('cover_letter')}}
                            </div>
                        @endif
                </div>


                </form>


                <form action="{{route('profile.resume')}}" method="post" enctype="multipart/form-data">
                    @csrf
                <div class="card">

                    <div class="card-header  bg-success">Update Resume</div>
                    <div class="card-body">
                        <input type="file" name="resume" class=" form-control" >
                        <br>
                        <button class="btn btn-primary">Update</button>
                    </div>
                    @if($errors->has('resume'))
                        <div class="error" style="color:red">
                            {{$errors->first('resume')}}
                        </div>
                    @endif
                </div>

                </form>


            </div>
        </div>
    </div>
@endsection

