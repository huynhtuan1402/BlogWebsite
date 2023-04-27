@extends('layout.user_layout')
@section('content')
    <div class="panel panel-default">
        <div class="panel-heading" style="font-size: 2em;">
            Posts
        </div>
        <div style="margin:20px"><a href="{{url('user/post/create')}}"><button class="btn btn-lg btn-info">Write a Post</button></a></div>

        <div class="table">
            <table class="table table-bordered table-hover table-responsive-sm">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Title</th>
                        <th>Category</th>
                        <th>Description</th>
                        <th>Create at</th>
                        <th>Update at</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <a href=""></a>
                <tbody>
                    @foreach ($posts as $post)
                        <tr>
                            <td>{{$post->id}}</td>
                            <td><a href="{{url('user/post/edit/'.$post->id)}}" style="text-decoration: underline">{{$post->title}}</a></td>
                            <td>{{$post->category_name}}</td>
                            <td>{!!$post->description!!}</td>
                            <td>{{$post->created_at}}</td>
                            <td>{{$post->updated_at}}</td>
                            <td>
                                <a href="{{url('user/post/edit/'.$post->id)}}"><button class="btn btn-primary btn-sm">Edit</button></a>
                                <a href="{{url('user/post/destroy/'.$post->id)}}"><button class="btn btn-warning btn-sm" onclick="return confirm('Do you want to delete this Post???')">Delete</button></a>
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
