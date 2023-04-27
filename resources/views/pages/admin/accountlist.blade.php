@extends('layout.admin_layout')
@section('content')
    <div class="panel panel-default">
        <div class="panel-heading" style="font-size: 2em;">
            Account list
        </div>
        <div class="table-responsive">
            <table class="table table-bordered table-hover table-responsive-lg">
                <thead>
                    <tr>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Password</th>
                        <th>Create at</th>
                        <th>Update at</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <a href=""></a>
                <tbody>
                    @foreach ($users as $user)
                        <tr>
                            <td><a href="{{url('admin/account/edit/'.$user->id)}}" style="text-decoration: underline">{{$user->name}}</a></td>
                            <td>{{$user->email}}</td>
                            <td>{{$user->password}}</td>
                            <td>{{$user->created_at}}</td>
                            <td>{{$user->updated_at}}</td>
                            <td>
                                <a href="{{url('admin/account/edit/'.$user->id)}}"><button class="btn btn-primary btn-sm">Edit</button></a>
                                <a href="{{url('admin/account/destroy/'.$user->id)}}"><button class="btn btn-warning btn-sm" onclick=" return confirm('Do you want to delete this Account???')">Delete</button></a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        <footer class="panel-footer">
            <div class="row">

                <div class="col-sm-5 text-center">
                    <small class="text-muted inline m-t-sm m-b-sm">showing 20-30 of 50 items</small>
                </div>
                <div class="col-sm-7 text-right text-center-xs">
                    <ul class="pagination pagination-sm m-t-none m-b-none">
                        <li><a href=""><i class="fa fa-chevron-left"></i></a></li>
                        <li><a href="">1</a></li>
                        <li><a href="">2</a></li>
                        <li><a href="">3</a></li>
                        <li><a href="">4</a></li>
                        <li><a href=""><i class="fa fa-chevron-right"></i></a></li>
                    </ul>
                </div>
            </div>
        </footer>
    </div>
@endsection
