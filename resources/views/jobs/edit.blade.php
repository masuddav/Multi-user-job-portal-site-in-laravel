@extends('layouts.app')

@section('content')
    <div class="container" xmlns="http://www.w3.org/1999/html">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Job Post</div>

                    <div class="card-body">
                        @if(Session::has('message'))
                            <div class=" alert alert-success">
                                {{Session::get('message')}}
                            </div>
                        @endif

                        <form action="{{route('jobs.edit',$job->id)}}" method="post" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <div class="form-group">
                                <label>Title</label>
                                <input type="text"  name="title" class="form-control"  value="{{$job->title}}">

                            </div>
                            @if($errors->has('title'))
                                <div class="error" style="color:red">
                                    {{$errors->first('title')}}
                                </div>
                            @endif
                            <div class="form-group">
                                <label>Roles</label>
                                <input type="text" name="roles" class="form-control" value="{{$job->roles}}">
                            </div>
                            @if($errors->has('roles'))
                                <div class="error" style="color:red">
                                    {{$errors->first('roles')}}
                                </div>
                            @endif

                            <div class="form-group">
                                <label>Description</label>
                                <textarea  name="description" class="form-control ">{{$job->description}}</textarea>
                            </div>
                            @if($errors->has('description'))
                                <div class="error" style="color:red">
                                    {{$errors->first('description')}}
                                </div>
                            @endif

                            <div class="form-group">
                                <label>Category</label>
                                <select name="category" class="form-control">
                                    @foreach( App\Category::all() as $cat)
                                        <option value="{{$cat->id}}">{{$cat->name}}</option>

                                    @endforeach

                                </select>
                            </div>
                            @if($errors->has('category'))
                                <div class="error" style="color:red">
                                    {{$errors->first('category')}}
                                </div>
                            @endif

                            <div class="form-group">
                                <label>Position</label>
                                <input type="text" name="position" class="form-control" value="{{$job->position}}">
                            </div>
                            @if($errors->has('position'))
                                <div class="error" style="color:red">
                                    {{$errors->first('position')}}
                                </div>
                            @endif

                            <div class="form-group">
                                <label>Status</label>
                                <select name="status" class="form-control">

                                    <option value="live"> Live</option>
                                    <option value="draft">Draft</option>

                                </select>
                            </div>
                            @if($errors->has('status'))
                                <div class="error" style="color:red">
                                    {{$errors->first('status')}}
                                </div>
                            @endif

                            <div class="form-group">
                                <label>type</label>
                                <select name="type" class="form-control">
                                    <option value="FullTime"> Full Time</option>
                                    <option value="PartTime"> Part Time</option>
                                    <option value="custom"> Custom </option>
                                </select>
                            </div>
                            @if($errors->has('type'))
                                <div class="error" style="color:red">
                                    {{$errors->first('type')}}
                                </div>
                            @endif

                            <div class="form-group">
                                <label>Apply Deadline</label>
                                <input type="date"  name="last_date" class="form-control" value="{{$job->last_date}}">


                            </div>
                            @if($errors->has('last_date'))
                                <div class="error" style="color:red">
                                    {{$errors->first('last_date')}}
                                </div>
                            @endif

                            <div class="form-group">
                                <label>Address</label>
                                <textarea name="address" class="form-control"> {{$job->address}}</textarea>
                            </div>
                            @if($errors->has('address'))
                                <div class="error" style="color:red">
                                    {{$errors->first('address')}}
                                </div>
                            @endif
                            <div class="form-group">
                                <button class="btn btn-outline-primary">Update</button>
                            </div>
                        </form>
                    </div>


                 </div>
             </div>
         </div>
    </div>
@endsection
