@extends('layout.admin_layout')
@section('content')
    <div class="row">
        <div class="col-lg-12">
            <section class="panel">
                <header class="panel-heading">
                    Edit account
                </header>
                <?php
                $message = session()->get('msg');
                if ($message) {
                    echo '<h3>' . $message . '</h3>';
                }
                ?>
                @if ($errors->any())
                    <div class="alert alert-danger">
                        Please check again!
                    </div>
                @endif
                <div class="panel-body">
                    <div class="position-center">
                        <form role="form" method="post" action="{{ url('admin/account/update/' . $user->id) }}">
                            @csrf
                            <div class="form-group">
                                <label for="exampleInputEmail1">Name</label>
                                <input type="text" class="form-control" id="exampleInputEmail1" name="name"
                                    value="{{ $user->name }}">
                                @error('name')
                                    <p style="color: red">{{ $message }}</p>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Email</label>
                                <input type="text" class="form-control" id="exampleInputEmail1" name="email"
                                    value="{{ $user->email }}">
                                @error('email')
                                    <p style="color: red">{{ $message }}</p>
                                @enderror
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
