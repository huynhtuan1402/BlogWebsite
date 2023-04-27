@extends('layout.user_layout')
@section('content')
    <div class="row">
        <div class="col-lg-12">
            <section class="panel">
                <header class="panel-heading">
                    CREATE AN CATEGORY
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
                        <form role="form" method="post" action="{{ url('/user/category/store') }}">
                            @csrf
                            <div class="form-group">
                                <label for="category_name">Category name</label>
                                <input type="text" class="form-control" id="category_name" name="category_name">
                                @error('category_name')
                                    <p style="color: red">{{ $message }}</p>
                                @enderror
                            </div>
                            <div class="form-group">
                                <input type="hidden" class="form-control" name="role">
                            </div>
                            <button type="submit" class="btn btn-lg btn-info">Save</button>
                        </form>
                    </div>
                </div>
            </section>
        </div>
    </div>
    <?php
    if (session()->has('msg')) {
        echo '<h3 style="text-align:center" class="msg">' . session()->get('msg') .'</h3>';
    }
    ?>
@endsection
