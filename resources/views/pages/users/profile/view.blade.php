@extends('layout.app')

@section('title', ' | My Profile')

@section('content')

    <section class="content-header">
        <h1>
            My Profile
        </h1>
    </section>


    <section class="content">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">

                        @include('includes.flash_message')

                        <a href="{{ url('/admin/my-profile/edit') }}" title="Edit profile"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>

                        <br/>
                        <br/>

                        <div class="table-responsive">
                            <table class="table">
                                <tbody>

                                @if(!empty($user->image))
                                    <tr>
                                        <td>
                                            <img src="{{ url('uploads/users/' . $user->image) }}" class="pull-right" width="200" height="200" />
                                        </td>
                                    </tr>
                                @endif

                                <tr><th> Name </th><td> {{ $user->name }} </td>
                                </tr><tr><th> Email </th><td> {{ $user->email }} </td></tr>
                                <tr><th> Position Title </th><td> {{ $user->position_title }} </td></tr>
                                <tr><th> Phone </th><td> {{ $user->phone }} </td></tr>

                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
