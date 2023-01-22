@extends('layout.app')

@section('title', ' | Edit My Profile')

@section('content')


    <section class="content-header">
        <h1>
            Edit My profile
        </h1>
    </section>

    <section class="content">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">

                        @if ($errors->any())
                            <ul class="alert alert-danger">
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        @endif

                        <form method="POST" action="{{ url('/admin/my-profile/edit/') }}" accept-charset="UTF-8" enctype="multipart/form-data">
                            {{ method_field('PATCH') }}
                            {{ csrf_field() }}

                            <div class="form-group {{ $errors->has('name') ? 'has-error' : ''}}">
                                <label for="name" class="control-label">{{ 'Name' }}</label>
                                <input class="form-control" name="name" type="text" id="name" value="{{ isset($user->name) ? $user->name : ''}}" >
                                {!! $errors->first('name', '<p class="help-block">:message</p>') !!}
                            </div>
                            <div class="form-group {{ $errors->has('email') ? 'has-error' : ''}}">
                                <label for="email" class="control-label">{{ 'Email' }}</label>
                                <input class="form-control" name="email" type="text" id="email" value="{{ isset($user->email) ? $user->email : ''}}" >
                                {!! $errors->first('email', '<p class="help-block">:message</p>') !!}
                            </div>
                            <div class="form-group {{ $errors->has('password') ? 'has-error' : ''}}">
                                <label for="password" class="control-label">{{ 'Password' }}</label>
                                <input class="form-control" name="password" type="password" id="password" value="" >
                                {!! $errors->first('password', '<p class="help-block">:message</p>') !!}
                            </div>
                            <div class="form-group {{ $errors->has('position_title') ? 'has-error' : ''}}">
                                <label for="position_title" class="control-label">{{ 'Position Title' }}</label>
                                <input class="form-control" name="position_title" type="text" id="position_title" value="{{ isset($user->position_title) ? $user->position_title : ''}}" >
                                {!! $errors->first('position_title', '<p class="help-block">:message</p>') !!}
                            </div>
                            <div class="form-group {{ $errors->has('phone') ? 'has-error' : ''}}">
                                <label for="phone" class="control-label">{{ 'Phone' }}</label>
                                <input class="form-control" name="phone" type="text" id="phone" value="{{ isset($user->phone) ? $user->phone : ''}}" >
                                {!! $errors->first('phone', '<p class="help-block">:message</p>') !!}
                            </div>

                            @if(!empty($user->image))
                                <img src="{{ url('uploads/users/' . $user->image) }}" width="200" height="180"/>
                            @endif

                            <div class="form-group {{ $errors->has('image') ? 'has-error' : ''}}">
                                <label for="image" class="control-label">{{ 'Image' }}</label>
                                <input class="form-control" name="image" type="file" id="image" >
                                {!! $errors->first('image', '<p class="help-block">:message</p>') !!}
                            </div>

                            <div class="form-group">
                                <input class="btn btn-primary" type="submit" value="Update">
                            </div>


                        </form>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
