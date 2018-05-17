@extends('layouts.app')

@section('title', 'Minor page')

@section('content')
<link href="/css/plugins/select2/select2.min.css" rel="stylesheet">
<link href="/css/plugins/summernote/summernote.css" rel="stylesheet">
<link href="css/plugins/bootstrap-tagsinput/bootstrap-tagsinput.css" rel="stylesheet">
<div class="wrapper wrapper-content animated fadeInRight">
    <!-- <div class="row">
        <div class="col-lg-12">
            <div class="ibox float-e-margins">
                <div class="ibox-title">
                    <h5>All form elements <small>With custom checbox and radion elements.</small></h5>
                </div>
                <div class="ibox-content">
                    <form method="get" class="form-horizontal">
                        <div class="form-group"><label class="col-sm-2 control-label">Select</label>
                            <div class="col-sm-10">
                                <select class="form-control m-b" name="account">
                                    <option>option 1</option>
                                    <option>option 2</option>
                                    <option>option 3</option>
                                    <option>option 4</option>
                                </select>
                            </div>
                        </div>
                        <div class="hr-line-dashed"></div>

                        <div class="form-group"><label class="col-sm-2 control-label">Select</label>
                            <div class="col-sm-10">
                                <select class="form-control m-b" name="account">
                                    <option>option 1</option>
                                    <option>option 2</option>
                                    <option>option 3</option>
                                    <option>option 4</option>
                                </select>
                            </div>
                        </div>
                        <div class="hr-line-dashed"></div>
                    </form>
                </div>
            </div>                                    
        </div>
    </div> -->
    <div class="row">
        <div class="col-lg-12">
            <div class="ibox float-e-margins">
                <div class="ibox-title">
                    <h5>All form elements <small>With custom checbox and radion elements.</small></h5>
                </div>
                <div class="ibox-content">
                    <form method="get" class="form-horizontal">
                        <div class="form-group"><label class="col-sm-1 control-label">Country</label>
                            <div class="col-sm-11">
                                <select class="select2_demo_1 form-control">
                                    @foreach($countries as $country)
                                        <option value="{{$country->id}}">{{$country->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        
                        <div class="hr-line-dashed"></div>

                        <div class="form-group">
                            <label class="col-sm-1 control-label">Purpose</label>
                            <div class="col-sm-11">
                                <select class="select2_demo_1 form-control">
                                    @foreach($purposes as $porpose)
                                        <option value="{{$porpose->id}}">{{$porpose->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        
                        <div class="hr-line-dashed"></div>

                        <div class="form-group">
                            <label class="col-sm-1 control-label">Title</label>
                            <div class="col-sm-11">
                                <input type="text" name="title" class="form-control">
                                
                            </div>
                        </div>

                        <div class="hr-line-dashed"></div>

                        <div class="form-group">
                            <label class="col-sm-1 control-label">Tags</label>
                            <div class="col-sm-11">
                                <input type="text" name="title" class="form-control tagsinput" value="Amsterdam,Washington,Sydney,Beijing,Cairo">
                                
                            </div>
                        </div>
                        
                        <div class="hr-line-dashed"></div>
                        <h1>Compose Post </h1>
                        <div class="mail-box">                                    
                            <div class="mail-text h-200">
                                <div class="summernote">
                                    <h3>Hello Jonathan! </h3>
                                    dummy text of the printing and typesetting industry. <strong>Lorem Ipsum has been the industry's</strong> standard dummy text ever since the 1500s,
                                    when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic
                                    typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with
                                </div>
                                <div class="clearfix"></div>
                            </div>
                        </div>
                        <div class="hr-line-dashed"></div>
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
    $(".select2_demo_1").select2();
    $(".select2_demo_2").select2();
    $(".select2_demo_3").select2({
        placeholder: "Select a state",
        allowClear: true
    });
    $('.summernote').summernote();
     $('.tagsinput').tagsinput({
            tagClass: 'label label-primary'
      });


    
</script>

@endsection