@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            
            <h2>Recent Jobs</h2>
            <table class="table">
                <thead>
                <th></th>
                <th></th>
                <th></th>
                <th></th>
                <th></th>
                </thead>
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
                            <button class="btn btn-info btn-sm">Apply</button>
                        </a>
                    </td>
                  </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        <div>

            <a href="{{route('alljobs')}}">
                <button style="width: 100%" class="btn btn-warning btn-lg">Brows All Jobs</button>
            </a>
        </div><br><br>
        <h1>Featured Company</h1><br>

        <div class="container">

            <div class="row">
                @foreach($companies as $company)
                <div class="col-md-3">
                    <div class="card" style="width: 18rem;">
                        <img class="card-img-top" src="..." alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title">{{$company->cname}}</h5>
                            <p class="card-text">{{Str::limit($company->description,20)}}</p>
                            <a href="{{route('company.index',[$company->id,$company->slug])}}" class="btn btn-primary">Visit Company</a>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>

        </div>

    </div>
@endsection
