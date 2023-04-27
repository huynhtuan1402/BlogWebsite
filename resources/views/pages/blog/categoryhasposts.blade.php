@extends('layout.blog_layout')
@section('content')
    <!--main-starts-->
    {{-- <div class="about">
        <div class="container">
            <div class="about-main"> --}}
                <div class="col-md-8 about-left">
                    <div class="about-tre">
                        <div class="a-1">
                            @foreach ($posts as $post)
                                <div class="col-md-6 abt-left" style="height: 200px">
                                    {{-- <a href="single.html"><img src="{{ asset('frontend/images') }}/c-3.jpg"
                                            alt="" /></a> --}}
                                    <h6>Find The Most</h6>
                                    <h3><a href="{{url('blog/post/'.$post->id)}}">{{ $post->title }}</a></h3>
                                    <p>{!! $post->description !!}</p>
                                    {{-- <label>May 29, 2015</label> --}}
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
                {{-- <div class="col-md-4 about-right heading">
                    <div class="abt-1">
                        <h3>ABOUT US</h3>
                        <div class="abt-one">
                            <img src="{{ asset('frontend/images') }}/c-2.jpg" alt="" />
                            <p>Quisque non tellus vitae mauris luctus aliquam sit amet id velit. Mauris ut dapibus nulla, a
                                dictum neque.</p>
                            <div class="a-btn">
                                <a href="single.html">Read More</a>
                            </div>
                        </div>
                    </div>
                    <div class="abt-2">
                        <h3>YOU MIGHT ALSO LIKE</h3>
                        <div class="might-grid">
                            <div class="grid-might">
                                <a href="single.html"><img src="{{ asset('frontend/images') }}/c-12.jpg"
                                        class="img-responsive" alt=""> </a>
                            </div>
                            <div class="might-top">
                                <h4><a href="single.html">Duis consectetur gravida</a></h4>
                                <p>Nullam non magna lobortis, faucibus erat eu, consequat justo. Suspendisse commodo nibh
                                    odio.</p>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                        <div class="might-grid">
                            <div class="grid-might">
                                <a href="single.html"><img src="{{ asset('frontend/images') }}/c-10.jpg"
                                        class="img-responsive" alt=""> </a>
                            </div>
                            <div class="might-top">
                                <h4><a href="single.html">Duis consectetur gravida</a></h4>
                                <p> Nullam non magna lobortis, faucibus erat eu, consequat justo. Suspendisse commodo nibh
                                    odio.</p>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                        <div class="might-grid">
                            <div class="grid-might">
                                <a href="single.html"><img src="{{ asset('frontend/images') }}/c-11.jpg"
                                        class="img-responsive" alt=""> </a>
                            </div>
                            <div class="might-top">
                                <h4><a href="single.html">Duis consectetur gravida</a></h4>
                                <p> Nullam non magna lobortis, faucibus erat eu, consequat justo. Suspendisse commodo nibh
                                    odio.</p>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                    </div>
                    <div class="abt-2">
                        <h3>ARCHIVES</h3>
                        <ul>
                            <li><a href="single.html">Lorem Ipsum is simply dummy text of the printing and typesetting
                                    industry. </a></li>
                            <li><a href="single.html">Lorem Ipsum has been the industry's standard dummy text ever since the
                                    1500s</a></li>
                            <li><a href="single.html">When an unknown printer took a galley of type and scrambled it to make
                                    a type specimen book. </a> </li>
                            <li><a href="single.html">It has survived not only five centuries, but also the leap into
                                    electronic typesetting</a> </li>
                            <li><a href="single.html">Remaining essentially unchanged. It was popularised in the 1960s with
                                    the release of </a> </li>
                            <li><a href="single.html">Letraset sheets containing Lorem Ipsum passages, and more recently
                                    with desktop publishing </a> </li>
                            <li><a href="single.html">Software like Aldus PageMaker including versionsof Lorem Ipsum.</a>
                            </li>
                        </ul>
                    </div>
                    <div class="abt-2">
                        <h3>NEWS LETTER</h3>
                        <div class="news">
                            <form>
                                <input type="text" value="Email" onfocus="this.value = '';"
                                    onblur="if (this.value == '') {this.value = 'Email';}" />
                                <input type="submit" value="Subscribe">
                            </form>
                        </div>
                    </div>
                </div> --}}
                {{-- <div class="clearfix"></div>
            </div>
        </div>
    </div> --}}
    <!--main-end-->
@endsection
