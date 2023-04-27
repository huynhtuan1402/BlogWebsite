@extends('layout.user_layout')
@section('content')
    <div class="row">
        <div class="col-lg-12">
            <section class="panel">
                <header class="panel-heading">
                    Edit Post
                </header>
                <?php
                $message = session()->get('msg');
                if ($message) {
                    echo '<h3>' . $message . '</h3>';
                }
                ?>
                <div class="panel-body">
                    <div class="position-center">
                        <form role="form" method="post" action="{{ url('user/post/update/' . $post->id) }}">
                            @csrf
                            <div class="form-group">
                                <label for="category_id">Category</label><br>
                                <select style="width:200px; background-color:lightgray;" name="category_id" id="category_id" selected="$category->id">
                                    @foreach ($categories as $category)
                                        <option value="{{ $category->id }}" {{$post->category_id==$category->id?'selected':''}}>{{ $category->category_name }}                                     </option>
                                    @endforeach
                                </select>
                                @error('category_name')
                                    <p style="color: red">{{ $message }}</p>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="title">Title</label>
                                <input type="text" class="form-control" id="title" name="title" value="{{$post->title}}">
                                @error('title')
                                    <p style="color: red">{{ $message }}</p>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="description">Description</label>
                                {{-- <input type="text" class="form-control" id="description" name="description" value="{{$post->description}}"> --}}
                                <textarea name="description" id="description" cols="30" rows="1" class="ckeditor">{{$post->description}}</textarea>
                                @error('description')
                                    <p style="color: red">{{ $message }}</p>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="content">Content</label>
                                {{-- <input type="text" class="form-control" id="content" name="content" value="{{$post->content}}"> --}}
                                <textarea name="content" id="content" cols="30" rows="30" class="ckeditor">{{$post->content}}</textarea>

                                @error('content')
                                    <p style="color: red">{{ $message }}</p>
                                @enderror
                            </div>
                            <button type="submit" class="btn btn-lg btn-info">Save</button>
                        </form>
                    </div>
                </div>
            </section>
        </div>
    </div>
    <script>
        CKEditor.replace('editor');
    </script> 
@endsection
