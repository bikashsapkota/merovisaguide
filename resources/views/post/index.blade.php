@extends('layouts.post.app')
@section('content')
<section id="visa-type" class="visa-type">
    <div class="animated fadeInRight article">
            <div class="row">
                <div class="col-lg-12 theme-color-background">
                    <div class="ibox">
                        <div class="ibox-content">
                            <div class="pull-right">
                                <button class="btn btn-white btn-xs" type="button">Model</button>
                                <button class="btn btn-white btn-xs" type="button">Publishing</button>
                                <button class="btn btn-white btn-xs" type="button">Modern</button>
                            </div>
                            <div class="text-center article-title">
                            <span class="text-muted"><i class="fa fa-clock-o"></i> 28th Oct 2015</span>
                                <h1>
                                    {{$post->title}}
                                </h1>
                            </div>
                            
                                {!! $post->body !!}
                            </div>


                        </div>
                    </div>
                </div>
            </div>
    
</section>
@endsection