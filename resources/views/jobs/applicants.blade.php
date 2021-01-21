@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">

           <div class="col-md-12">
               @foreach($applicants as $applicant)
              <div class="card">
                  <div class="card-header">{{$applicant->title}}</div>

                  <div class="card-body">
                      <table class="table">
                          <thead>
                          <th>Name</th>
                          <th>Email</th>
                          <th>Address</th>
                          <th>Phone</th>
                          <th>Resume</th>
                          <th>Cover Letter</th>
                          </thead>
                          @foreach($applicant->users as $user)
                          <tbody>
                          <tr>
                              <td>{{$user->name}}</td>
                              <td>{{$user->email}}</td>
                              <td>{{$user->profile->address}}</td>
                              <td>{{$user->profile->phone_number}}</td>
                              <td><a href="{{Storage::url($user->profile->resume)}}">Resume</a></td>
                              <td><a href="{{Storage::url($user->profile->cover_letter)}}">Cover Letter</a></td>

                          </tr>
                          </tbody>
                          @endforeach
                      </table>
                  </div>
                  @endforeach
              </div>
           </div>
        </div>
    </div>
@endsection

