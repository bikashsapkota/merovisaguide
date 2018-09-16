@extends('layouts.admin.app')
@section('content')
<div class="wrapper wrapper-content animated fadeInRight">
    <div class="row">
        <div class="col-lg-12">
        <div class="ibox float-e-margins">
            <div class="ibox-title">
                <h5>Basic Data Tables example with responsive plugin</h5>
            </div>
            <div class="ibox-content">
                <a href="/admin/testomonial/create"> <button class="btn btn-success">Add</button></a>
                <div class="table-responsive">
                    <table class="table table-striped table-bordered table-hover dataTables-example">
                        <thead>
                            <tr>
                                <th>SN</th>
                                <th>Name</th>
                                <th>Description</th>
                                <th>Photo</th>
                                <th>Delete</th>
                            </tr>
                        </thead>
            <tbody>
            @foreach($testomonials as $testomonial)    
            <tr class="gradeX">
                <td>{{$loop->iteration}}</td>
                <td>{{$testomonial->name}}</td>
                <td>{{$testomonial->description}}</td>
                <td>
                    <img src="img/{{$testomonial->photo}}" height="128" width="128">
                </td>
                <td>
                    <a href="/admin/testomonial/delete/{{$testomonial->id}}"><button>Delete</button></a>
                </td>
                
            </tr>
            @endforeach
            </tbody>
            <tfoot>
            <tr>
                <th>SN</th>
                <th>Name</th>
                <th>Description</th>
                <th>Photo</th>
                <th>Delete</th>
            </tr>
            </tfoot>
            </table>
            </div>


            </div>
        </div>
    </div>
    </div>
</div>

@endsection