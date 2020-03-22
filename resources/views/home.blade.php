@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Brand Resumes</div>
                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <div class="card" style="width: 50%;">
                        <div class="card-body">
                          <h5 class="card-title">Hello <b>{{$user['name']}}</b></h5>
                          <h6 class="card-subtitle mb-2 text-muted">Be Happy</h6>
                          <p class="card-text">You are logged in and your rols is <b>{{$user['role']}}</b>!</p>
                          <a href="#" class="card-link">Card link</a>
                          <a href="#" class="card-link">Another link</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
