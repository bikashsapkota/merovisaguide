@extends('layouts.post.app')
@section('content')

<div class="wrapper wrapper-content  animated fadeInRight article" style="margin-top: 10%">
    <div class="row">
                <div class="ibox-content">
                    <div class="text-center article-title">
                        <span class="text-muted"><i class="fa fa-clock-o"></i> {{$post->updated_at->format('d M Y')}}</span>
                        <h1>
                            {{$post->title}}
                        </h1>
                    </div>

                    <p>
                        {!! $post->body !!}
                    </p>

                    <hr>

                </div>

    </div>

</div>

@endsection