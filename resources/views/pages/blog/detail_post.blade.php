@extends('layout.blog_layout2')
@section('content')
    <!--start-single-->
    <div class="single">
        <div class="container">
            <div class="single-top">
                <div class=" single-grid">
                    <h4>{{ $post->title }}</h4>
                    <ul class="blog-ic">
                        <li><a href="#"><span> <i class="glyphicon glyphicon-user"> </i>{{ $post->author }}</span> </a>
                        </li>
                        <li><span><i class="glyphicon glyphicon-time"> </i>{{ $post->updated_at }}</span></li>
                        {{-- <li><span><i class="glyphicon glyphicon-eye-open"> </i>Hits:145</span></li> --}}
                    </ul>
                    <div style="">
                        <p>{!! $post->content !!}</p>
                    </div>

                </div>
                <div class="comments heading">
                    <h3>Comments</h3>
                    @foreach ($comments as $comment)
					<div class="media">
                        <div class="media-left">
                            <a href="#">
                                <img src="{{ asset('frontend/images') }}/si.png" alt="">
                            </a>
                        </div>
                        <div class="media-body">
                            <h4 class="media-heading">{{$comment->name}}</h4>
                            <p>{{$comment->message}}</p>
                        </div>
                    </div>
					@endforeach
                </div>
                <div class="comment-bottom heading">
                    <h3>Leave a Comment</h3>
                    <form method="post" action="{{url('blog/comment')}}">
						@csrf
                        <input type="text" value="" name="name" placeholder="Name">
                        <input type="text" value="" name="email" placeholder="Email">
                        <textarea cols="77" rows="6" value="" name="message" placeholder="Message"></textarea>
						<input type="hidden" name="post_id" value="{{$post->id}}">
                        <input type="submit" value="Send">
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!--end-single-->
@endsection
