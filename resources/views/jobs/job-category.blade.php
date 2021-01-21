@extends('layouts.main')

@section('content')
    <div class="site-section bg-light">
        <div class="container">
            <div class="row">

                <h1>{{$categoryName->name}}</h1>


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

