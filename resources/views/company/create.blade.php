@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row ">
            <div class="col-md-3">
                @if (empty(Auth::user()->company->logo))
                    <img style="100%" src="{{asset('avatar/company-logo.png')}}" width="200" height="200" >
                @else
                    <img style=" 100%" src="{{asset('uploads/avatar')}}/{{Auth::user()->company->logo}}" width="200" height="200" >
                @endif
                <form action="{{route('company.logo')}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <br>
                    <div class="card">
                        <div class="card-header">Change Company Photo</div>
                        <div class="card-body">
                            <input type="file" name="logo" class=" form-control" >
                            <br>
                            <button class="btn btn-primary">Update</button>
                        </div>

                        @if($errors->has('logo'))
                            <div class="error" style="color:red">
                                {{$errors->first('logo')}}
                            </div>
                        @endif
                    </div>
                </form>
            </div>
            <div class="col-md-5">
                <div class="card">
                    <div class="card-header bg-success">Update Your Information</div>
                    <div class="card-body">
                        <form action="{{route('company.store')}}" method="POST">
                            @csrf
                            <div class="form-group">
                                <label>Address</label>

                                <textarea class="form-control" rows="3" name="address">

                            </textarea>
                            </div>
                            {{-- Error Exception--}}
                            @if($errors->has('address'))
                                <div class="error" style="color:red">
                                    {{$errors->first('address')}}
                                </div>
                            @endif
                            <div class="form-group">
                                <label>Phone</label>
                                <p></p>
                                <input type="text" value=""  name="phone" class="form-control" rows="3"  >


                            </div>
                            @if($errors->has('phone'))
                                <div class="error" style="color:red">
                                    {{$errors->first('phone')}}
                                </div>
                            @endif


                            <div class="form-group">
                                <label>Website</label>
                                <p></p>
                                <input type="text" value=""  name="website" class="form-control" rows="3"  >


                            </div>
                            @if($errors->has('website'))
                                <div class="error" style="color:red">
                                    {{$errors->first('website')}}
                                </div>
                            @endif

                            <div class="form-group">
                                <label>Slogan</label>
                                <p></p>
                                <input type="text" value=""  name="slogan" class="form-control" rows="3"  >


                            </div>
                            @if($errors->has('slogan'))
                                <div class="error" style="color:red">
                                    {{$errors->first('slogan')}}
                                </div>
                            @endif

                            <div class="form-group">
                                <label>Description</label>

                                <textarea class="form-control" rows="3" name="description">


                            </textarea>
                            </div>
                            {{-- Error Exception--}}
                            @if($errors->has('description'))
                                <div class="error" style="color:red">
                                    {{$errors->first('description')}}
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
                    <div class="card-header bg-success">Company Details</div>
                    <div class="card-body">
                        <p><b>Company Name:&nbsp;&nbsp;</b>{{Auth::user()->company->cname}}</p>

                        <p><b>Company Email:&nbsp;&nbsp;</b>{{Auth::user()->email}}</p>
                        <p><b> Address:&nbsp;&nbsp;</b>{{Auth::user()->company->address}}</p>
                        <p><b>Company:&nbsp;&nbsp;</b><a href="company/{{Auth::user()->company->slug}}"><button type="button" class="btn btn-primary">View</button></a> </p>
                        <p><b> Website:&nbsp;&nbsp;</b>{{Auth::user()->company->website}}</p>
                        <p><b> Phone:&nbsp;&nbsp;</b>{{Auth::user()->company->phone}}</p>
                        <p><b> Slogan:&nbsp;&nbsp;</b>{{Auth::user()->company->slogan}}</p>
                        <p><b> Desecription:&nbsp;&nbsp;</b>{{Auth::user()->company->description}}</p>

                    </div>

                </div>
                <form action="{{route('company.coverphoto')}}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="card">
                        <div class="card-header  bg-success">Update Cover Photo</div>
                        <div class="card-body">
                            <input type="file" name="cover_photo" class=" form-control" >
                            <br>
                            <button class="btn btn-primary">Update</button>
                        </div>

                        @if($errors->has('cover_photo'))
                            <div class="error" style="color:red">
                                {{$errors->first('cover_photo')}}
                            </div>
                        @endif
                    </div>


                </form>





            </div>
        </div>
    </div>
@endsection


