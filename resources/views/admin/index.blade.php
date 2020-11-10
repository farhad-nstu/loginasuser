@extends('layouts.app')

@section('content')
<?php 

    session_start();    
    

?>
<div class="container">
    <div class="row justify-content-center">
    

        <div class="col-md-10">

            <div class="card">

                <div class="card-body">
                    <table class="table">
                      <thead>
                        <tr>
                          <td>#</td>
                          <td>Title</td>
                          <td>Email</td>
                        </tr>
                      </thead>
                      <tbody>
                      @php($i = 1)
                      @foreach($users as $applicant)
                        <tr>
                          <td>{{ $i++ }}</td>
                          <td>
                            <a href="{{ route('loggedInAsUser', $applicant->id) }}">  
                              {{ $applicant->name }}
                            </a>
                          </td>
                          <td>{{ $applicant->email }}</td>

                        </tr>
                      @endforeach
                      </tbody>
                    </table>
                    <div class="text-center">
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>
@endsection
