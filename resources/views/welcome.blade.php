<!DOCTYPE html>
<html lang="en">
<head>
    <title>Job Finder &mdash; Colorlib Website Template</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

@include('partition/head')

</head>
<body>

  @include('partition.nav')
  @include('partition.hero')
  @include('partition.category')


    <div class="site-section bg-light">
        <div class="container">
            <div class="row">

                
                <div class="col-md-8 mb-5 mb-md-0" data-aos="fade-up" data-aos-delay="100">
                    <h2 class="mb-5 h3">Recent Jobs</h2>
                
                    <div class="rounded border jobs-wrap">
                       @foreach($jobs as $job)
                        <a href=" {{route('jobs.show',[$job->id,$job->slug])}}" class="job-item d-block d-md-flex align-items-center  border-bottom fulltime">
                            <div class="company-logo blank-logo text-center text-md-left pl-3">
                                <img src="partial/images/company_logo_blank.png" alt="Image" class="img-fluid mx-auto">
                            </div>
                            <div class="job-details h-100">
                                <div class="p-3 align-self-center">
                                    <h3>{{$job->position}}</h3>
                                    <div class="d-block d-lg-flex">
                                        <div class="mr-3"><span class="icon-suitcase mr-1"></span>{{$job->company->cname}}</div>
                                        <div class="mr-3"><span class="icon-room mr-1"></span> {{$job->address}}</div>

                                    </div>
                                </div>
                            </div>
                            <div class="job-category align-self-center">
                                <div class="p-3">
                                    <span class="text-info p-2 rounded border border-info">{{$job->type}}</span>
                                </div>
                            </div>
                        </a>


                        @endforeach

                    </div>

                    <div class="col-md-12 text-center mt-5">
                        <a href="{{route('alljobs')}}" class="btn btn-primary rounded py-3 px-5"><span class="icon-plus-circle"></span> Show More Jobs</a>
                    </div>
                </div>
                <div class="col-md-4 block-16" data-aos="fade-up" data-aos-delay="200">
                    <div class="d-flex mb-0">
                        <h2 class="mb-5 h3 mb-0">Featured Jobs</h2>
                        <div class="ml-auto mt-1"><a href="" class="owl-custom-prev">Prev</a> / <a href="" class="owl-custom-next">Next</a></div>
                    </div>

                    <div class="nonloop-block-16 owl-carousel">

                        @foreach($jobs as $job)

                        <div class="border rounded p-4 bg-white">
                            <h2 class="h5">{{$job->position}}</h2>
                            <p><span class="border border-warning rounded p-1 px-2 text-warning">{{$job->type}}</span></p>
                            <p>
                                <span class="d-block"><span class="icon-suitcase"></span> {{$job->company->cname}}</span>
                                <span class="d-block"><span class="icon-room"></span>{{$job->address}}</span>

                            </p>
                            <p class="mb-0">{{$job->description}}</p>

                        </div>

                        @endforeach

                    </div>

                </div>
            </div>
        </div>
    </div>

   @include('partition.testimonial')


    <div class="site-blocks-cover overlay inner-page" style="background-image: url('images/hero_1.jpg');" data-aos="fade" data-stellar-background-ratio="0.5">
        <div class="container">
            <div class="row align-items-center justify-content-center">
                <div class="col-md-6 text-center" data-aos="fade">
                    <h1 class="h3 mb-0">Your Dream Job</h1>
                    <p class="h3 text-white mb-5">Is Waiting For You</p>
                    <p><a href="#" class="btn btn-outline-warning py-3 px-4">Find Jobs</a> <a href="#" class="btn btn-warning py-3 px-4">Apply For A Job</a></p>

                </div>
            </div>
        </div>
    </div>



    <div class="site-section site-block-feature bg-light">
        <div class="container">

            <div class="text-center mb-5 section-heading">
                <h2>Why Choose Us</h2>
            </div>

            <div class="d-block d-md-flex border-bottom">
                <div class="text-center p-4 item border-right" data-aos="fade">
                    <span class="flaticon-worker display-3 mb-3 d-block text-primary"></span>
                    <h2 class="h4">More Jobs Every Day</h2>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Obcaecati reprehenderit explicabo quos fugit vitae dolorum.</p>
                    <p><a href="#">Read More <span class="icon-arrow-right small"></span></a></p>
                </div>
                <div class="text-center p-4 item" data-aos="fade">
                    <span class="flaticon-wrench display-3 mb-3 d-block text-primary"></span>
                    <h2 class="h4">Creative Jobs</h2>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Obcaecati reprehenderit explicabo quos fugit vitae dolorum.</p>
                    <p><a href="#">Read More <span class="icon-arrow-right small"></span></a></p>
                </div>
            </div>
            <div class="d-block d-md-flex">
                <div class="text-center p-4 item border-right" data-aos="fade">
                    <span class="flaticon-stethoscope display-3 mb-3 d-block text-primary"></span>
                    <h2 class="h4">Healthcare</h2>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Obcaecati reprehenderit explicabo quos fugit vitae dolorum.</p>
                    <p><a href="#">Read More <span class="icon-arrow-right small"></span></a></p>
                </div>
                <div class="text-center p-4 item" data-aos="fade">
                    <span class="flaticon-calculator display-3 mb-3 d-block text-primary"></span>
                    <h2 class="h4">Finance &amp; Accounting</h2>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Obcaecati reprehenderit explicabo quos fugit vitae dolorum.</p>
                    <p><a href="#">Read More <span class="icon-arrow-right small"></span></a></p>
                </div>
            </div>
        </div>
    </div>




    @include('partition.blog')




   @include('partition.footer')
</body>
</html>
