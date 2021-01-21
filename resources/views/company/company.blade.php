@extends('layouts.main')
@section('content')
    <div class="site-section bg-light">
        <div class="container">
            <h4 class="tilte">All Companies</h4>
            <div class="row">

                @foreach($companies as $company)
                    <div class="col-md-3  ">
                        <div class="card mt-md-3" >

                            @if (empty(Auth::user()->company->logo))
                                <img  class="card-img-top " style="100%" src="{{asset('avatar/company-logo.png')}}" width="150" height="150" >
                            @else
                                <img class="card-img-top"   src="{{asset('uploads/avatar')}}/{{Auth::user()->company->logo}}" width="80" height="80" >
                            @endif

                            <div class="card-body text-center">
                                <h5 class="card-title">{{$company->cname}}</h5>

                                <a href="{{route('company.index',[$company->id,$company->slug])}}" class="btn btn-primary">Visit Company</a>
                            </div>
                        </div>
                        </div>
                        @endforeach
                    </div>


        </div>

        <div class="pagination p-md-5 " >
            <ul class="m-auto">
                {{$companies->links()}}
            </ul>



        </div>

    </div>

    @endsection
