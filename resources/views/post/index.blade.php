@extends('layouts.post.app')
@section('content')
<section id="visa-type" class="visa-type">
    <div class="animated fadeInRight article">
            <div class="row">
                <div class="col-lg-12 theme-color-background">
                    <div class="ibox">
                        <div class="ibox-content">
                            <div class="text-center article-title">
                                <span class="text-muted">
                                    <i class="fa fa-clock-o"></i>
                             {{$post->updated_at->format('d M Y')}}
                         </span>
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