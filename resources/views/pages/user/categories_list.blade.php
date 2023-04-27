@extends('layout.user_layout')
@section('content')
    <div class="panel panel-default">
        <div class="panel-heading" style="font-size: 2em;">
            CATEGORY
        </div>
        <div style="margin:20px"><a href="{{url('user/category/create')}}"><button class="btn btn-lg btn-info">New Category</button></a></div>

        <div class="">
            <table class="table table-bordered table-hover table-responsive-lg">
                <thead class="table-dark">
                    <tr>
                        <th>#</th>
                        <th>Category</th>
                        <th>Create at</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($categories as $category)
                        <tr>
                            <td>{{$category->id}}</td>
                            <td><a href="{{url('user/category/edit/'.$category->id)}}" style="text-decoration: underline">{{$category->category_name}}</a></td>
                            <td>{{$category->created_at}}</td>
                            <td>
                                <a href="{{url('user/category/edit/'.$category->id)}}"><button class="btn btn-primary btn-sm">Edit</button></a>
                                <a href="{{url('user/category/destroy/'.$category->id)}}"><button class="btn btn-warning btn-sm" onclick="return confirm('Do you want to delete???')">Delete</button></a>
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
