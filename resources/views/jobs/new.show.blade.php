@extends('layouts.main')

@section('content')
    <div class="site-section bg-light">
        <div class="container">
            <div class="row">

                <div class="col-md-12 col-lg-8 mb-5">
                    @if(Session::has('message'))
                        <div class="alert alert-success">
                            {{Session::get('message')}}
                        </div>
                    @endif


                    <div class="p-5 bg-white">

                        <div class="mb-4 mb-md-5 mr-5">
                            <div class="job-post-item-header d-flex align-items-center">
                                <h2 class="mr-3 text-black h4">{{$job->position}}</h2>
                                <div class="badge-wrap">
                                    <span class="border border-warning text-warning py-2 px-4 rounded">{{$job->type}}</span>
                                </div>
                            </div>
                            <div class="job-post-item-body d-block d-md-flex">
                                <div class="mr-3"><span class="fl-bigmug-line-portfolio23"></span> <a href="#">{{$job->address}}</a></div>

                            </div>
                        </div>



                        <div class="img-border mb-5">
                            <a>
                             <img src="{{asset('partial/images/hero_2.jpg')}}" alt="Image" class="img-fluid rounded">
                            </a>
                        </div>


                         <h3>Job Description
                             <a href="" data-toggle="modal" data-target="#exampleModal">
                             <i style="font-size:35px;color: #0b2e13;float: right" class="fa fa-envelope-square"></i>
                             </a>
                         </h3>
                        <p>{{$job->description}}</p>
                        <p class="mt-5"><a href="#" class="btn btn-primary  py-2 px-4">Apply Job</a></p>
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
     </div>
        


    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Send Job your Friends</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="{{route('mail')}}" method="post" >@csrf
                        <input type="hidden" name="job_id" value="{{$job->id}}" >
                        <input type="hidden" name="job_slug"  value="{{$job->slug}}">
                        <div class="form-group">
                            <label>Your Name</label>
                            <input type="text" name="your_name" class="form-control">
                        </div>


                        <div class="form-group">
                            <label>Your Email</label>
                            <input type="text" name="your_email" class="form-control">
                        </div>
                        <div class="form-group">
                            <label>friend Name</label>
                            <input type="text" name="friend_name" class="form-control">
                        </div>
                        <div class="form-group">
                            <label>friend email</label>
                            <input type="text" name="friend_email" class="form-control">
                        </div>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Send Mail</button>
                </div>
                </form>
            </div>
        </div>
    </div>


@endsection
