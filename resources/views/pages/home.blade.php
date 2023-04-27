@extends('layout.blog_layout')
@section('content')
    <!--main-starts-->
    <div class="col-md-8 about-left">
        <div class="about-one">
            <p>Find The Most</p>
            <h3>Coffee of the month</h3>
        </div>
        <div class="about-two">
            <a href="single.html"><img src="{{ asset('frontend/images') }}/post{{ $newestpost->id }}_1.jpg""
                    alt="" /></a>
            <p>Posted by <a href="#">{{ $newestpost->author }}</a> {{ $newestpost->updated_at }} <a
                    href="#">comments(2)</a></p>
            <p>{!! $newestpost->description !!}</p>

            <div class="about-btn">
                <a href="{{ url('blog/post/' . $newestpost->id) }}">Read More</a>
            </div>
            <ul>
                <li>
                    <p>Share : </p>
                </li>
                <li><a href="#"><span class="fb"> </span></a></li>
                <li><a href="#"><span class="twit"> </span></a></li>
                <li><a href="#"><span class="pin"> </span></a></li>
                <li><a href="#"><span class="rss"> </span></a></li>
                <li><a href="#"><span class="drbl"> </span></a></li>
            </ul>
        </div>
        <div class="about-tre">
            <div class="a-1">
                @foreach ($posts as $post)
                    <div class="col-md-6 abt-left" style="height: 200px">
                        {{-- <a href="single.html"><img src="{{ asset('frontend/images') }}/c-3.jpg"
                                            alt="" /></a> --}}
                        <h6>Find The Most</h6>
                        <h3><a href="{{ url('blog/post/' . $post->id) }}">{{ $post->title }}</a></h3>
                        <p>{!! $post->description !!}</p>
                        {{-- <label>May 29, 2015</label> --}}
                    </div>
                @endforeach
            </div>
        </div>
    </div>
    <!--main-end-->
@endsection
