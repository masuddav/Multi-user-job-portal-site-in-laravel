@extends('layouts.main')

@section('content')
    <div class="site-section bg-light">
        <div class="container">
            <div class="row">
               
                <h1>Recent Jobs</h1>
                <div class="col-md-12">
              {{--  <search-component></search-component> --}}

                    <form action="{{route('alljobs')}}" method="get">
                        <div class="form-inline">
                            <div class="form-group">

                                <input  placeholder="Keyword" type="text" name="title" class="form-control">
                            </div>&nbsp;


                            <div class="form-group">

                                <select name="type" class="form-control">
                                    <option>Select Type</option>
                                    <option value="Fulltime"> Full Time</option>
                                    <option value="Parttime"> Part Time</option>
                                    <option value="Custom"> Custom </option>
                                </select>
                            </div> &nbsp;


                            <div class="form-group">

                                <select name="category_id" class="form-control">
                                    <option>Select Category</option>
                                    @foreach( App\Category::all() as $cat)
                                        <option value="{{$cat->id}}">{{$cat->name}}</option>

                                    @endforeach

                                </select>
                            </div>&nbsp;


                            <div class="form-group">

                                <input placeholder="Address" type="text" name="address" class="form-control">
                            </div>&nbsp;



                            <div class="form-group">

                                <button class="btn btn-outline-dark">Search</button>
                            </div>

                        </div>
                    </form>
                </div>

                <table class="table">
                    <thead>
                    <th></th>
                    <th></th>
                    <th></th>
                    <th></th>
                    <th></th>
                    </thead>
                    <hr>
                    <tbody>

                    @foreach($jobs as $job)
                        <tr>
                            <td>
                                <img src="{{asset('avatar/company-logo.png')}}" width="80">
                            </td>
                            <td>
                                Position: {{$job->position}}
                                <br>
                                Job Type:&nbsp; <i class="fa fa-clock"></i> {{$job->type}}
                            </td>
                            <td>
                                <i class="fa fa-map-marker"></i>&nbsp;  Address: {{$job->address}}
                            </td>
                            <td>
                                <i class="fa fa-calendar-check"></i>&nbsp; Date: {{$job->created_at->diffForHumans()}}
                            </td>
                            <td>
                                <a href="{{route('jobs.show',[$job->id,$job->slug])}}" >
                                    <button type="submit" class="btn btn-info btn-sm">Apply</button>
                                </a>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>

                {{$jobs->links()}}




            </div>




        </div>
    </div>

@endsection
