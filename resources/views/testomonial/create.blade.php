@extends('layouts.admin.app')
@section('content')
<div class="wrapper wrapper-content animated fadeInRight">
    <div class="row">
        <div class="col-lg-12">
	        <div class="ibox float-e-margins">
	            <div class="ibox-title">
	                <h5>Add New Testomonial</h5>
	                <div class="ibox-tools">
	            </div>
	            <div class="ibox-content">
	            	<form method="post" class="form-horizontal" action="{{route('admin.add_testmonial')}}" enctype="multipart/form-data">
	            		@csrf
	            		<div class="form-group">
                            <label class="col-sm-1 control-label">Name</label>
                            <div class="col-sm-11">
                            	<input type="text" name="name" class="form-control"> 
                            </div>
                        </div>
	            		<div class="form-group">
                            <label class="col-sm-1 control-label">Description</label>
                            <div class="col-sm-11">
                            	<textarea class="form-control" name="description">
                            		
                            	</textarea>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-1 control-label">Photo</label>
                            <div class="col-sm-11">
                            	<input type="file" name="input_img">
                            </div>
                        </div>
                        <div class="form-group">
                        	<div class="col-sm-11">
                            	<input type="submit" value="Submit" class="btn btn-success">
                        	</div>
                        </div>
	            	</form>
	            </div>
	        </div>
	    </div>
	</div>
</div>
@endsection