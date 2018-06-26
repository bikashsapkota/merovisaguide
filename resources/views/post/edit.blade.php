@extends('layouts.admin.app')

@section('title', 'Minor page')

@section('content')
<link href="/css/plugins/select2/select2.min.css" rel="stylesheet">
<link href="/css/plugins/summernote/summernote.css" rel="stylesheet">
<link href="css/plugins/bootstrap-tagsinput/bootstrap-tagsinput.css" rel="stylesheet">
<div class="wrapper wrapper-content animated fadeInRight">
    <div class="row">
        <div class="col-lg-12">
            <div class="ibox float-e-margins">
                <div class="ibox-title">
                    <h5>All form elements <small>With custom checbox and radion elements.</small></h5>
                </div>
                <div class="ibox-content">
                    <form method="post" class="form-horizontal" action="{{route('admin.update_post')}}">
                        <input type="hidden" name="post_id" value="{{$post->id}}">
                        <input type="hidden" name="cv_id" value="{{$cv->cv_id}}">
                        <div class="form-group"><label class="col-sm-1 control-label">Country</label>
                            <div class="col-sm-11">
                                <select class="select2_demo_1 form-control" name="country">
                                    @foreach($countries as $country)
                                    <option value="{{$country->id}}" @if($cv->country_id == $country->id) selected @endif>{{$country->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>

                        <div class="hr-line-dashed"></div>

                        <div class="form-group">
                            <label class="col-sm-1 control-label">Purpose</label>
                            <div class="col-sm-11">
                                <select class="select2_demo_1 form-control" name="purpose">
                                    @foreach($purposes as $porpose)
                                    <option value="{{$porpose->id}}" @if($cv->visa_type_id == $porpose->id) selected  @endif>{{$porpose->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>

                        <div class="hr-line-dashed"></div>

                        <div class="form-group">
                            <label class="col-sm-1 control-label">Title</label>
                            <div class="col-sm-11">
                                <input type="text" class="form-control" name="title" value="{{$post->title}}">

                            </div>
                        </div>

                        <div class="hr-line-dashed"></div>

                        <div class="form-group">
                            <label class="col-sm-1 control-label">Tags</label>
                            <div class="col-sm-11">
                                <input type="text" class="form-control tagsinput" value="Amsterdam,Washington,Sydney,Beijing,Cairo" name="tags">

                            </div>
                        </div>

                        <div class="hr-line-dashed"></div>
                        <h1>Compose Post </h1>
                        <div class="mail-box">
                            <div class="mail-text h-200">
                                <textarea class="summernote" name="post">
                                    {{$post->body}}
                                </textarea>
                                <div class="clearfix"></div>
                            </div>
                        </div>
                        <div class="hr-line-dashed"></div>
                        @csrf

                        <div class="form-group">
                            <div class="col-sm-2">
                                <input type="submit" class="btn btn-success" value="Update">

                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<script src="/js/jquery-3.1.1.min.js"></script>
<script src="/js/bootstrap.min.js"></script>
<script src="/js/plugins/select2/select2.full.min.js"></script>
<script src="/js/plugins/summernote/summernote.min.js"></script>
<script src="/js/plugins/bootstrap-tagsinput/bootstrap-tagsinput.js"></script>
<script type="text/javascript">
    $(document).ready(function(){

    })
    // $(".select2_demo_1").select2();
    $(".select2_demo_2").select2();
    $(".select2_demo_1").select2({
        placeholder: "Select a state",
        allowClear: true
    });
    $('.summernote').summernote();
    $('.tagsinput').tagsinput({
        tagClass: 'label label-primary'
    });



</script>

@endsection