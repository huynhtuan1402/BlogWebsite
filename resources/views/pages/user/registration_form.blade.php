@extends('layout.user_layout')
@section('content')
    <div class="row">
        <div class="col-lg-12">
            <section class="panel">
                <header class="panel-heading">
                    REGISTRATION
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
                        <form role="form" method="post" action="{{ url('/user/store') }}">
                            @csrf
                            <div class="form-group">
                                <label for="name">Name</label>
                                <input type="text" class="form-control" id="name" name="name">
                                @error('name')
                                    <p style="color: red">{{ $message }}</p>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="email">Email</label>
                                <input type="text" class="form-control" id="email" name="email">
                                @error('email')
                                    <p style="color: red">{{ $message }}</p>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="password">Password</label>
                                <input type="password" class="form-control" id="password" name="password">
                                @error('password')
                                    <p style="color: red">{{ $message }}</p>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="confirm-password">Confirm-password</label>
                                <input type="password" class="form-control" id="email" name="confirm-password">
                                @error('confirm-password')
                                    <p style="color: red">{{ $message }}</p>
                                @enderror
                            </div>
                            <div class="form-group">
                                <input type="hidden" class="form-control" name="role">
                            </div>
                            <button type="submit" class="btn btn-lg btn-info">Create</button>
                        </form>
                    </div>
                </div>
            </section>
        </div>
    </div>
    <?php
    if (session()->has('msg')) {
        echo '<h3 style="text-align:center" class="msg">' . session()->get('msg') . '<br/><a href="/login"> CLICK HERE TO LOGIN</a>'. '</h3>';
    }
    ?>
@endsection
