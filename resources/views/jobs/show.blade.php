@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{$job->title}}</div>

                    <div class="card-body">

                     <p>
                         <h3>Description</h3>
                        {{$job->description}}

                     </p>
                        <p>
                        <h3>Duties</h3>
                        {{$job->roles}}

                        </p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <div class="card-header bg-primary">Short Info</div>

                    <div class="card-body">
                        <p>Comapany:
                            <a href="{{route('company.index',[$job->company->id,$job->company->slug])}}"> &nbsp;{{$job->company->cname}}</a>
                        </p>
                        <p>Address:&nbsp;{{$job->address}}</p>
                        <p>Job Position:&nbsp;{{$job->position}}</p>
                        <p>Estimates:&nbsp;{{$job->last_date}}</p>
                    </div>

                        @if(Auth::user()->user_type =='seeker')
                         @if(!$job->checkSaved())

                <apply-component :jobid={{$job->id}}></apply-component>

                       @endif <br>
                        <favourite-component :jobid={{$job->id}} :favour={{$job->checkSaved()?'true':'false'}}></favourite-component>

                    @endif


                </div>
                @if(Session::has('message'))
                    <div class=" alert alert-success">
                        {{Session::get('message')}}
                    </div>
                @endif
            </div>

        </div>
    </div>
@endsection
