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
                        <table class="table table-striped table-bordered table-hover dataTables-example">
                            <thead>
                                <tr>
                                    <th>SN</th>
                                    <th>POST ID</th>
                                    <th>TITLE</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($posts as $post)
                                <tr class="gradeX">
                                    <td>{{$loop->iteration}}</td>
                                    <td>{{$post->id}}
                                    </td>
                                    <td>{{$post->title}}</td>
                                    <td>
                                        <a href="/admin/post/edit/{{$post->id}}"><button>Edit</button></a>
                                        <a href="/admin/post/delete/{{$post->id}}"><button>Delete</button></a>
                                    </td>

                                </tr>
                                @endforeach
                            </tbody>
                            <tfoot>
                                <tr>
                                    <th>SN</th>
                                    <th>POST ID</th>
                                    <th>Title</th>
                                    <th>Action</th>
                                </tr>
                            </tfoot>
                        </table>
                        <a href="{{route('admin.index')}}"> <button class="button btn-success">Add New Post</button> </a>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>

<link rel="stylesheet" type="text/css" href="css/datatable-bootstrap.min.css" media="screen">
<script src="/js/jquery-3.1.1.min.js"></script>
<script src="/js/plugins/dataTables/datatables.min.js"></script>
<script>
    $('.dataTables-example').datatable();
</script>
@endsection