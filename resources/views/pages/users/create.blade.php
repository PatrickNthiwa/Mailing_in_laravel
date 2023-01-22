<<<<<<< HEAD
@extends('layout.app')

@section('title', ' | Create user')

@section('content')

    <section class="content-header">
        <h1>
            Create New user
        </h1>
        <ol class="breadcrumb">
            <li><a href="{{ url('/admin/') }}"><i class="fa fa-dashboard"></i> Dashboard</a></li>
            <li class="{{ url('/admin/users') }}">Users</li>
            <li class="active">Create</li>
        </ol>
    </section>

    <section class="content">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
=======
@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            @include('admin.sidebar')

            <div class="col-md-9">
                <div class="card">
                    <div class="card-header">Create New user</div>
>>>>>>> origin/master
                    <div class="card-body">
                        <a href="{{ url('/admin/users') }}" title="Back"><button class="btn btn-warning btn-sm"><i class="fa fa-arrow-left" aria-hidden="true"></i> Back</button></a>
                        <br />
                        <br />

                        @if ($errors->any())
                            <ul class="alert alert-danger">
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        @endif

<<<<<<< HEAD
                        <form method="POST" action="{{ url('/admin/users') }}" accept-charset="UTF-8" enctype="multipart/form-data">
=======
                        <form method="POST" action="{{ url('/admin/users') }}" accept-charset="UTF-8" class="form-horizontal" enctype="multipart/form-data">
>>>>>>> origin/master
                            {{ csrf_field() }}

                            @include ('pages.users.form', ['formMode' => 'create'])

                        </form>

                    </div>
                </div>
            </div>
        </div>
<<<<<<< HEAD
    </section>
=======
    </div>
>>>>>>> origin/master
@endsection
