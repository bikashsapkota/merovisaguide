@extends('layouts.admin.app')
@section('content')
<div class="wrapper wrapper-content animated fadeInRight">
    <div class="row">
        <div class="col-lg-12">
        <div class="ibox float-e-margins">
            <div class="ibox-title">
                <h5>Basic Data Tables example with responsive plugin</h5>
                <div class="ibox-tools">
                    <a class="collapse-link">
                        <i class="fa fa-chevron-up"></i>
                    </a>
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-wrench"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-user">
                        <li><a href="#">Config option 1</a>
                        </li>
                        <li><a href="#">Config option 2</a>
                        </li>
                    </ul>
                    <a class="close-link">
                        <i class="fa fa-times"></i>
                    </a>
                </div>
            </div>
            <div class="ibox-content">

                <div class="table-responsive">
            <table class="table table-striped table-bordered table-hover dataTables-example" >
            <thead>
            <tr>
                <th>SN</th>
                <th>Full Name</th>
                <th>Phone No</th>
                <th>Email</th>
                <th>Address</th>
                <th>Country</th>
                <th>Purpose</th>
                <th>Message</th>
                <th>Status</th>
            </tr>
            </thead>
            <tbody>
            @foreach($enqueries as $enquery)    
            <tr class="gradeX">
                <td>{{$loop->iteration}}</td>
                <td>{{$enquery->full_name}}</td>
                <td>{{$enquery->phone_no}}</td>
                <td>{{$enquery->email}}</td>
                <td>{{$enquery->address}}</td>
                <td>{{$enquery->country}}</td>
                <td>{{$enquery->purpose}}</td>
                <td>{{$enquery->message}}</td>
                <td>{{$enquery->status}}</td>

                <td>
                    <a href="/admin/enquery/edit/{{$enquery->id}}"><button>Edit</button></a>
                    <a href="/admin/enquery/delete/{{$enquery->id}}"><button>Delete</button></a>
                </td>
                
            </tr>
            @endforeach
            </tbody>
            <tfoot>
            <tr>
                <th>SN</th>
                <th>Full Name</th>
                <th>Phone No</th>
                <th>Email</th>
                <th>Address</th>
                <th>Country</th>
                <th>Purpose</th>
                <th>Message</th>
                <th>Status</th>
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