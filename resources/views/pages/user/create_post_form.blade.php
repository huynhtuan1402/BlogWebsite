@extends('layout.user_layout')
@section('content')

    <div class="row">
        <div class="col-lg-12">
            <section class="panel">
                <header class="panel-heading">
                    WRITE A POST
                </header>
                {{-- {{ session()->has('msg') ? session()->get('msg') : '' }} --}}
                {{-- {{session()->forget('msg');}} --}}
                <div class="panel-body">
                    <div class="position-center">
                        @if ($errors->any())
                            <div class="alert alert-danger">
                                Please check again!
                            </div>
                        @endif
                        <form role="form" method="post" action="{{ url('/user/post/store') }}">
                            @csrf
                            <div class="form-group">
                                <label for="category_id">Category</label><br>
                                <select style="width:200px; background-color:lightgray;" name="category_id" id="category_id">
                                    @foreach ($categories as $category)
                                        <option value="{{ $category->id }}">{{ $category->category_name }}                                     </option>
                                    @endforeach
                                </select>
                                @error('category_name')
                                    <p style="color: red">{{ $message }}</p>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="title">Title</label>
                                <input type="text" class="form-control" id="title" name="title">
                                @error('title')
                                    <p style="color: red">{{ $message }}</p>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="description">Description</label>
                                <textarea name="description" id="description" cols="30" rows="10" class="ckeditor"></textarea>
                                {{-- <input type="text" class="form-control" id="description" name="description"> --}}
                                @error('description')
                                    <p style="color: red">{{ $message }}</p>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="content">Content</label>
                                {{-- <input type="text" class="form-control" id="content" name="content"> --}}
                                <textarea name="content" id="content" cols="30" rows="10" class="ckeditor"></textarea>
                                @error('content')
                                    <p style="color: red">{{ $message }}</p>
                                @enderror
                            </div>
                            <button type="submit" class="btn btn-lg btn-info">Save</button>
                        </form>
                    </div>
                </div>
        </div>
    </div>
    <script>
        CKEditor.replace('editor');
    </script>
    </section>
    <?php
    if (session()->has('msg')) {
        echo '<h3 style="text-align:center" class="msg">' . session()->get('msg') . '</h3>';
    }
    ?>
@endsection
