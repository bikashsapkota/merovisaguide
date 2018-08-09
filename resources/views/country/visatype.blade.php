@extends('app')
@section('content')

<div class="wrapper wrapper-content  animated fadeInRight article" style="margin-top: 10%">
    <div class="text-center">
        <h1>Available visas in {{$name}}</h1>
    </div>
<div class="row" style="margin-top: 5%">

    @foreach($countries as $country)

    <div class="col-lg-4">
        <div class="contact-box center-version">
        <a href="/landingtopost?country={{$visa->id}}&purpose={{$country->id}}">
            <div class="dd-handle">
                <span class="label label-info"><i class="fa fa-graduation-cap"></i></span> {{$country->name}}
            </div>
            <div class="m-t-md">
                Apply for {{$country->name}}
            </div>
        </a>
        </div>
    </div>

    @endforeach





</div>
</div>
@endsection