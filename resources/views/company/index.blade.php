@extends('layouts.main')

@section('content')
    <div class="site-section bg-light" >
        <div class="container">
            <div class="row ">
                <div class="company-profile">
                    @if (empty(Auth::user()->company->cover_photo))
                        <img style="100% " src="{{asset('avatar/company-logo.png')}}" width="200" height="200" >
                    @else
                        <img style=" 100% margin:1px;" src="{{asset('uploads/cover')}}/{{Auth::user()->company->cover_photo}}" width="1000" height="200" >
                    @endif
                </div>
                <br><br>
               
                <div class="container-fluid">
                    <div class="row">
                    <div class="col-md-2"> 
                    @if (empty(Auth::user()->company->logo))
                        <img style="100%" src="{{asset('avatar/company-logo.png')}}" width="150" height="150" >
                    @else
                        <img style=" 100%" src="{{asset('uploads/avatar')}}/{{Auth::user()->company->logo}}" width="150" height="150" >
                    @endif
                </div>
                <div class="col-md-9">
                    <h1>{{$company->cname}}</h1>

                    <p>{{$company->description}}</p>

                    <p><b>Slogan:&nbsp;{{$company->slogan}}</b></p>

                    <p> <b>Address:&nbsp;{{$company->address}}</b></p>

                    <p> <b>Phone:&nbsp;{{$company->phone}}</b></p>
                    <p><b>Website:&nbsp;{{$company->website}}</b></p>

                  </div>
               </div>
            
           </div>
                <table class="table">
                    <thead>
                    <th></th>
                    <th></th>
                    <th></th>
                    <th></th>
                    <th></th>
                    </thead>
                    <tbody>

                    @foreach($company->jobs as $job)
                        <tr>
                            <td>
                                @if (empty(Auth::user()->company->logo))
                                    <img  class="rounded-circle " style="100%" src="{{asset('avatar/company-logo.png')}}" width="150" height="150" >
                                @else
                                    <img style=" 100% "  src="{{asset('uploads/avatar')}}/{{Auth::user()->company->logo}}" width="80" height="80" >
                                @endif
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
                                    <button class="btn btn-info btn-sm">Apply</button>
                                </a>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
