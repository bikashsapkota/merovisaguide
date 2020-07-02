@extends('news.app')
@section('content')

<div class="wrapper wrapper-content  animated fadeInRight blog" style="margin-top: 10%">
    @foreach($news as $new)
    <div class="row">
        <div class="ibox">
            <div class="ibox-content">
                <div class="row">
                    <div class="col-md-4">
                        <div class="ibox-content no-padding border-left-right">
                            <img alt="image" class="img-responsive" src="img/profile_big.jpg">
                        </div>
                    </div>

                    <div class="col-md-8">
                        <a href="article.html" class="btn-link">
                            <h2>
                                Their pronunciation and their most 
                            </h2>
                        </a>
                        <div class="small m-b-xs">
                            <strong>Mike Johnson</strong> <span class="text-muted"><i class="fa fa-clock-o"></i> 11th Oct 2015</span>
                        </div>
                        <p>
                            To take a trivial example, which of us ever undertakes laborious physical exercise, except to obtain some advantage from it? But who has any right to find fault with a man who chooses. Many desktop publishing packages and web page editors now. Many desktop publishing
                        </p>
                        <div class="m-t text-right">

                            <a href="#" class="btn btn-xs btn-outline btn-primary">Read More<i class="fa fa-long-arrow-right"></i> </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endforeach
</div>

@endsection