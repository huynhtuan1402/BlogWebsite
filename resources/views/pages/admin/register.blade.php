@extends('layout.admin_layout')
@section('content')
    <div class="row">
        <div class="col-lg-12">
            <section class="panel">
                <header class="panel-heading">
                    Create an user account
                </header>
                {{-- {{ session()->has('msg') ? session()->get('msg') : '' }} --}}
                {{-- {{session()->forget('msg');}} --}}
                <?php
                $message = session()->get('msg');
                if ($message) {
                    echo '<h3>' . $message . '</h3>';
                }
                ?>
                <div class="panel-body">
                    <div class="position-center">
                        @if ($errors->any())
                            <div class="alert alert-danger">
                               Please check again!
                            </div>
                        @endif
                        <form role="form" method="post" action="{{ url('/admin/account/store') }}">
                            @csrf
                            <div class="form-group">
                                <label for="name">Name</label>
                                <input type="text" class="form-control" id="name" name="name">
                                @error('name')
                                <p style="color: red">{{$message}}</p>
                            @enderror
                            </div>
                            <div class="form-group">
                                <label for="email">Email</label>
                                <input type="text" class="form-control" id="email" name="email">
                                @error('email')
                                    <p style="color: red">{{$message}}</p>
                                @enderror
                            </div>
                            <div class="form-group">
                                <input type="hidden" class="form-control" name="role">
                            </div>

                            <button type="submit" class="btn btn-info">Create</button>
                        </form>
                    </div>
                </div>
            </section>
        </div>
    </div>
@endsection
