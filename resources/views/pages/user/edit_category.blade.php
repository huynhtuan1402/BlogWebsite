@extends('layout.user_layout')
@section('content')
    <div class="row">
        <div class="col-lg-12">
            <section class="panel">
                <header class="panel-heading">
                    Edit Category
                </header>
                <?php
                $message = session()->get('msg');
                if ($message) {
                    echo '<h3>' . $message . '</h3>';
                }
                ?>
                <div class="panel-body">
                    <div class="position-center">
                        <form role="form" method="post" action="{{ url('user/category/update/' . $category->id) }}">
                            @csrf
                            <div class="form-group">
                                <label for="exampleInputEmail1">Name</label>
                                <input type="text" class="form-control" id="exampleInputEmail1" name="category_name"
                                    value="{{ $category->category_name }}">
                            </div>
                            <button type="submit" class="btn btn-info"
                                onclick="return confirm('Bạn có muốn lưu??')">Lưu</button>
                        </form>
                    </div>
                </div>
            </section>
        </div>
    </div>
@endsection
