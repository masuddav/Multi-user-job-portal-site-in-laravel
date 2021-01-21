@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row ">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">My Jobs</div>

                    <div class="card-body">
                        <table class="table">
                            <thead>
                            <th></th>
                            <th>Position</th>
                            <th>Address</th>
                            <th>Created At</th>
                            <th class="text-center">Actions</th>
                            </thead>
                            <tbody>

                            @foreach($jobs as $job)
                                <tr>
                                    <td>
                                        @if (empty(Auth::user()->company->logo))
                                            <img style="100%" src="{{asset('avatar/company-logo.png')}}" width="150" height="150" >
                                        @else
                                            <img style=" 100%" src="{{asset('uploads/avatar')}}/{{Auth::user()->company->logo}}" width="80" height="80" >
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
                                    <td class="text-center">
                                     <a class="btn btn-primary" href="{{route('jobs.edit',$job->id)}}"><i class="fas fa-edit outline-bg-success"></i></a>||


                                     <a class="btn btn-danger" href="{{route('jobs.delete',$job->id)}}"> <i class="fas fa-trash-alt "></i></a>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

